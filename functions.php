<?php 

/***
 * TWO FIELDS SERIALIZED DATA FROM ONE DB CELL TO KEY VALUE ARRAY FOR WORDPRESS [CAN BE USED FOR CLONED/REPEATING FIELDS]
 * **/
function two_fields_serialized_to_kv_arr($id, $db_meta_field, $field_1, $field_2)
{
    $all_data = get_post_meta($id, $db_meta_field, true);
    $arr_1 = $all_data[$field_1];
    $arr_2 = $all_data[$field_2];

    $key_value_array = [];
    foreach ($arr_1 as $i => $key) {
        $key_value_array[$key] = $arr_2[$i];
    }
    return $key_value_array;
}