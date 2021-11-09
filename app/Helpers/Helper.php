<?php

if (!function_exists('new_line_to_list')) {
    function new_line_to_list($str, $tag = 'ul', $class = '')
    {
        $bits = explode("\n", $str);

        $class_string = $class ? ' class="' . $class . '"' : false;

        $newstring = '<' . $tag . $class_string . '>';

        foreach ($bits as $bit) {
            $newstring .= "<li>" . $bit . "</li>";
        }

        return $newstring . '</' . $tag . '>';
    }
}
if (!function_exists('new_line_to_paragraph')) {
    function new_line_to_paragraph($str, $tag = 'div', $class = '')
    {
        $bits = explode("\n", $str);

        $class_string = $class ? ' class="' . $class . '"' : false;

        $newstring = '<' . $tag . $class_string . '>';

        foreach ($bits as $bit) {
            $newstring .= "<p>" . $bit . "</p>";
        }

        return $newstring . '</' . $tag . '>';
    }
};

if (!function_exists('getIp')) {
    function getIp()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }

};

if (!function_exists('saveActivityLog')) {
    function saveActivityLog($title, $request, $description, $type, $user_id)
    {
        if($title){
            $activityLog = new \App\Models\ActivityLog();

            $activityLog->title = $title;
            $activityLog->ip_address = $request->ip();
            $activityLog->user_agent = $request->header('User-Agent');
            $activityLog->description = $description;
            $activityLog->type = $type;
            $activityLog->query_string = $request->getRequestUri();
            if($user_id){
                $activityLog->user_id = $user_id;
            }

            $activityLog->save();

            return $title;
        }
    }
};

if (!function_exists('getUserProfile')) {
    function getUserProfile($user)
    {
        if($user->role_id == \App\Models\User::TUTOR){
            $tutorShowResource = new \App\Http\Resources\TutorShowResource($user);
            return $tutorShowResource;
        } else {
            $studentShowResource = new \App\Http\Resources\StudentShowResource($user);
            return $studentShowResource;
        }
    }
};


if (!function_exists('createOrFindUser')) {
    function createOrFindUser($request)
    {
        $user = \App\Models\User::where('email', $request->email)->orWhere('phone', $request->phone)->first();

        if($user) {
            $response = $user;
        } else{
            $user = new \App\Models\User();
            $user->email = $request->email;
            $user->phone = $request->phone;

            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->profile_image = $request->profile_image;
            $user->gender = $request->gender;
            $user->phone_code = $request->phone_code;
            $user->created_by_admin = $request->created_by_admin;
            $user->password = bcrypt('Admin@123');
            $user->role_id = \App\Models\User::STUDENT;
            $user->verify_id = \Illuminate\Support\Str::random(60);
            $user->verify_token = \Illuminate\Support\Str::random(60);
            $user->verified = \App\Models\User::UNVERIFIED;
            $user->is_active = 1;

            $user->save();

            \App\Models\ProfileSetting::create([
                'viewmode'=>\App\Models\ProfileSetting::TUTOR,
                'user_id'=>$user->id
            ]);

            $response = $user;
        }

        return $response;
    }
};

if (!function_exists('isUserRegistered')) {
    function isUserRegistered($request)
    {
        $user = \App\Models\User::where('email', $request->email)->orWhere('phone', $request->phone)->first();
        if($user) {
            $response = $user;
        } else{
            $response = null;
        }

        return $response;
    }
};

// Create or find order
if (!function_exists('createOrFindOrder')) {
    function createOrFindOrder($request, $userId, $orderType)
    {
        $orderId = $request->order_id;
        $order = \App\Models\Order::findOrNew($orderId);
        $order->user_id = $userId;
        $order->order_reference = 'ord-' . $userId . str_pad(mt_rand(0, 999999), 10, '0', STR_PAD_LEFT);
        $order->payment_type_id = $request->payment_type_id;
        $order->order_status_id = 2;
        $order->billing_email = $request->billing_email;
        $order->billing_name = $request->billing_name;
        $order->billing_address = $request->billing_address;
        $order->billing_city = $request->billing_city;
        $order->billing_province = $request->billing_province;
        $order->billing_postalcode = $request->billing_postalcode;
        $order->billing_phone = $request->billing_phone;
        $order->billing_name_on_card = $request->billing_name_on_card;
        // $order->billing_discount = $request->billing_discount;
        $order->billing_discount_code = $request->billing_discount_code;
        // $order->billing_subtotal = $request->billing_subtotal;
        $order->billing_tax = $request->billing_tax;
        //$order->billing_total = $request->billing_total;
        $order->payment_gateway = $request->payment_gateway;
        $order->order_type = $orderType;

        if($orderType != \App\Models\Order::COURSE){

            $order->billing_total = $request->billing_total;
            $order->billing_subtotal = $request->billing_subtotal;
            $order->billing_discount = $request->billing_discount;
        }

        $order->saveOrFail();

        return $order;
    }
};

if (!function_exists('createDispatcher')) {
    function createDispatcher($email, $cc, $bcc, $type, $status, $payload, $error, $entity_type, $entity_id)
    {
        $dispatcher = new \App\Models\Dispatcher();

        $dispatcher->email = $email;
        $dispatcher->cc = $cc;
        $dispatcher->bcc = $bcc;
        $dispatcher->type = $type;
        $dispatcher->status = $status;
        $dispatcher->payload = $payload;
        $dispatcher->error = $error;
        $dispatcher->entity_type = $entity_type;
        $dispatcher->entity_id = $entity_id;

        $dispatcher->saveOrFail();

        return $dispatcher;
    }
}

if (!function_exists('saveCV')) {
    function saveCV($file, $userId, $cv_title, $is_featured)
    {

        $requestResume = $file;
        $fileOriginalName = $requestResume->getClientOriginalName();

        $fileName = date('d-m-Y-H-i') . '-' . $userId .'-resume-' . $fileOriginalName;
        $resume = new \App\Models\Resume();
        $resume->user_id = $userId;
        $resume->title = $cv_title;
        $resume->is_featured = $is_featured;
        $resume->file_name = $fileName;

        \Illuminate\Support\Facades\Storage::putFile('/public/uploads/resume', $file);

        $resume->save();
        return $resume;
    }
}
