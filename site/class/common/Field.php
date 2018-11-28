<?php
	
	class Field
	{
		static function isEmpty($field_name, $form, $field, $req_params) {
			if (empty($req_params[$field])) {
				JS::alert("[" . $field_name . "] 항목을 작성해 주세요");
				self::focus($form, $field);
			}
		}
		
		static function isNotSame($field_name, $form, $field, $field2, $req_params) {
			if ($req_params[$field] != $req_params[$field2]) {
				JS::alert("[" . $field_name . "] 항목이 일치하지 않습니다.");
				self::focus($form, $field);
			}
		}
		
		static function focus($form, $field) {
			echo "
				<script>
					document.$form.$field.focus();
				</script>
			";
			exit;
		}
	}

?>
