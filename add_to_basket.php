<?php
/*
add to basket
*/
include('_config.php');

// do we have an item to add?

if (isset($_GET['item'])){
	$itemid=$_GET['item'];
	///is the item in the basket already?
	$found=false;// found the item in the basket or not
	if(isset($_SESSION['basket'])){ //if baset exists
		for($i=0; $i<count($_SESSION['basket']); $i++){
			$this_basket_item_id=$_SESSION['basket']); $i++) {
				if ($this_basket_item_id==$Car_ID){
					
				}
			}

				//item already in the basket, so increment the quantity
				$_SESSION['basket'][$i]['qty']++;
				$founf=true; //we found the item
				break; //so break out of the loop
				
			}
		}
	}// eo does basket exit
	
	//if the item wasn't found
	if($found==false){
		//add our tem to the session basket
		$_SESSION['basket'][]['id']=$itemid;
		$sesh_index=count($_SESSION['basket'])-1;
		$_SESSION['basket'] [$sesh_index] ['qty']=1;
	}
}
header("Location:viewitem.php?item=$itemid");
?>
