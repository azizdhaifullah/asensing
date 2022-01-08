<?php

if(!function_exists('select')){
    function select($id, $title, $data = [], $selected_id = null){
        $select = "<label for='".$id."'>".$title."</label>
                    <select id='".$id."' name='".$id."' class='form-control'>";

        if($selected_id){
            $select .= "<option value=''>-- Select Region --</option>";
        }else{
            $select .= "<option value='' selected>-- Select Region --</option>";
        }

        foreach ($data as $key => $value) {

            if($selected_id && $key == $selected_id){
                $select .= "<option value='".$key."' selected>$value</option>";
            }

            $select .= "<option value='".$key."'>$value</option>";
        }

        return $select .= "</select>";
    }
}

if(!function_exists('defaultPagination')){
    function defaultPagination($data){
        $paginateView = '<div class="pagination justify-content-start">'.$data->onEachSide(5)->links().'</div>';
        $paginateView .= "Showing ".$data->firstItem()." to ".$data->lastItem()." of ".$data->total()." data";
        return $paginateView;
    }
}
