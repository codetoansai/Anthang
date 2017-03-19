<?php 
	/**
	* 
	*/
	class functions 
	{
		public static function slug($data,$char)
		{
			$str=implode($char,explode(' ', $data));
			return $str;
		}
		//load category sửa cate
		public static  function loadnav($data,$parent,$str="--|",$select=0)
		{
			foreach ($data as $key=>$values) {
				if($values['parent_id']==$parent){
					if($select!=0 && $values['id']==$select){
					echo '<option value="'.$values['id'].'" selected>'.$str." ".$values['name'].'</option>';
						}
					else{
					echo '<option value="'.$values['id'].'">'.$str." ".$values['name'].'</option>';
						}
						$id=$values['id'];
						functions::loadnav($data,$id,$str."--|");
				}
			}
		}

			//load category sửa product
			public static  function loadnav1($data,$str="--|",$select=0)
		{
			foreach ($data as $key=>$values) {

					if($select!=0 && $values['id']==$select){
					echo '<option value="'.$values['id'].'" selected>'.$str." ".$values['name'].'</option>';
						}
					else{
					echo '<option value="'.$values['id'].'">'.$str." ".$values['name'].'</option>';
						}
						functions::loadnav($data,$str."--|");
				
			}
		}

		//function phân trang
		// public static function phantrang($link, $total_records, $current_page, $limit)
		// {

		// 	 // Tính tổng số trang
		// 	    $total_page = ceil($total_records / $limit);
			     
		// 	    // Giới hạn current_page trong khoảng 1 đến total_page
		// 	    if ($current_page > $total_page){
		// 	        $current_page = $total_page;
		// 	    }
		// 	    else if ($current_page < 1){
		// 	        $current_page = 1;
		// 	    }
			     
		// 	    // Tìm Start
		// 	    $start = ($current_page - 1) * $limit;
			 
		// 	    $html = '';
			     
		// 	    // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
		// 	    if ($current_page > 1 && $total_page > 1){
		// 	        $html .= '<a href="'.str_replace('{page}', $current_page-1, $link).'">Prev</a>';
		// 	    }
			 
		// 	    // Lặp khoảng giữa
		// 	    for ($i = 1; $i <= $total_page; $i++){
		// 	        // Nếu là trang hiện tại thì hiển thị thẻ span
		// 	        // ngược lại hiển thị thẻ a
		// 	        if ($i == $current_page){
		// 	            $html .= '<span>'.$i.'</span>';
		// 	        }
		// 	        else{
		// 	            $html .= '<a href="'.str_replace('{page}', $i, $link).'">'.$i.'</a>';
		// 	        }
		// 	    }
			 
		// 	    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
		// 	    if ($current_page < $total_page && $total_page > 1){
		// 	        $html .= '<a href="'.str_replace('{page}', $current_page+1, $link).'">Next</a>';
		// 	    }
			     
		// 	    // Trả kết quả
		// 	    return array(
		// 	        'start' => $start,
		// 	        'limit' => $limit,
		// 	        'html' => $html
		// 	    );
			
		// }

	}

 ?>