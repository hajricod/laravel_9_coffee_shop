<?php

use App\Repositories\Contracts\BasketRepositoryContract;
use Illuminate\Support\Facades\App;

if (!function_exists('int_to_decimal')) {
    function int_to_decimal(int $number)
    {
        return number_format(($number / 100), 2);
    }
}

if (!function_exists('basket')) {
    function basket()
    {
        return app(BasketRepositoryContract::class);
    }
}

if (!function_exists('lang')) {
    function lang()
    {
        return App::currentLocale();
    }
}

if (!function_exists('getImage')) {
    function getImage($images)
    {
        $image_list  = JSON_DECODE($images);

        return $image_list[0];
    }
}

// if (!function_exists('getFirstImage')) {
//     function getFirstImage($id)
//     {
//         $image = ProductImage::where('product_id', $id)->first();

//         if($image)
//             return $image->name;

//         return '../../img_placeholder.jpg';
//     }
// }

// if (!function_exists('getImages')) {
//     function getImages($id)
//     {
//         $images = ProductImage::where('product_id', $id)->get();

//         return $images;
//     }
// }

if (!function_exists('discount')) {
    function discount($price, $discount)
    {
        $new_price  = $price - ($price * $discount/100);

        return $new_price;
    }
}

// if (!function_exists('shippingCost')) {
//     function shippingCost($total)
//     {
//         $totalOrder   = ShippingRate::find('4')->total_order;
//         $freeShipping = ShippingRate::where('total_order', '>=', $totalOrder)->first();
//         $flatRate     = ShippingRate::where('total_order', '<', $totalOrder)->first();

//         if($total >= $totalOrder) {
//             return $freeShipping->cost;
//         }else {
//             return  $flatRate->cost;
//         }
//     }
// }

if (!function_exists('getTotal')) {
    function getTotal($items)
    {
        $total = 0;

        foreach ($items as $item) {
            $total += $item->sold_price;
        }

        return $total;
    }
}

// if (!function_exists('checkRole')) {
//     function checkRole($required_role)
//     {
//         $admin_roles = auth()->user()->AdminRoles;
//         $roles = []; 

//         foreach ($admin_roles as $admin_role) {
//             $roles[] = $admin_role->role->code;
//         }

//         if(!in_array($required_role, $roles)) {
//             abort(403, __('You don\'t have permission to') .' '. __($required_role));
//         }
//     }
// }

// if (!function_exists('checkPermission')) {
//     function checkPermission($required_role)
//     {
//         $admin_roles = AdminRole::join('roles', 'admin_role.role_id', '=', 'roles.id')
//         ->join('groups', 'admin_role.group_id', '=', 'groups.id')
//         ->select('admin_role.admin_id', 'groups.code as group', 'roles.code as role')
//         ->where('admin_role.admin_id', auth()->user()->id)
//         ->get();

//         $roles = []; 

//         foreach ($admin_roles as $admin_role) {
//             $roles[] = $admin_role->group . "." .$admin_role->role;
//         }

//         if(!in_array($required_role, $roles)) {

//             $index     = strpos($required_role, ".");
//             $role_text = substr($required_role, $index+1);

//             abort(403, __('You don\'t have permission to') .' '. __($role_text));
//         }

//         return true;
//     }
// }

// if (!function_exists('AdminRole')) {
//     function AdminRole($required_role)
//     {

//         $admin_roles = AdminRole::join('roles', 'admin_role.role_id', '=', 'roles.id')
//         ->join('groups', 'admin_role.group_id', '=', 'groups.id')
//         ->select('admin_role.admin_id', 'groups.code as group', 'roles.code as role')
//         ->where('admin_role.admin_id', auth()->user()->id)
//         ->get();

//         $roles = []; 

//         foreach ($admin_roles as $admin_role) {
//             $roles[] = $admin_role->group . "." .$admin_role->role;
//         }

//         if(!in_array($required_role, $roles)) {
//             return false;
//         }

//         return true;
//     }
// }
