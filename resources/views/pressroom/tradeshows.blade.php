@extends('layouts.master-pressroom')

@section('main-content')
<div class="container max-width-site">

	<div class="row">
		
		@php


			$dir = './img/press/tradeshows/';
			
			$folder_years = array();
		    $ffs = scandir($dir);

		    foreach($ffs as $ff){
		        if($ff != '.' && $ff != '..'){

		            if(is_dir($dir.'/'.$ff)){
		            	if($ff != ".DS_Store") {
		            		array_push($folder_years, $ff);
		            	}
		                
		            } 
		        }
		    }

		    $folder_years = array_reverse($folder_years);
		    
		    foreach($folder_years as $year) {

		    	$dir = './img/press/tradeshows/'.$year;

		    	$ffs = scandir($dir);

			    foreach($ffs as $fair){
			        if($fair != '.' && $fair != '..'){

			            if(is_dir($dir.'/'.$fair)){
			            	if($fair != ".DS_Store") {
			            		$fair_n = str_replace("-", " ", $fair);
			            		echo '
			            		<div class="col-12">
			            		<div class="separator">
			            		<h3 class="background"><span>'.strtoupper($fair_n).' '.$year.'</span></h3>
			            		</div>
			            		</div>';
			                	
			                	$directory = $dir.'/'.$fair.'/';
					            $files = glob($directory . '*.jpg');
					            if ( $files !== false ){
					              $filecount = count($files);
					            }

					            for($i = 1; $i <= $filecount; $i++) {
					            	echo'<div class="col-12 col-sm-6 col-md-4 col-lg-3 product_thumb">
							        <a href="/img/press/tradeshows/'.$year.'/'.$fair.'/high-resolution/'.$fair.'-'.$year.'-circu-magical-furniture-'.$i.'.jpg" target="_blank">
							        <img src="/img/press/tradeshows/'.$year.'/'.$fair.'/'.$fair.'-'.$year.'-circu-magical-furniture-'.$i.'.jpg" class="img-responsive">
							        <div class="product-caption"> DOWNLOAD IMAGE > </div>
							        </a>
							        </div>';
					            }
					            
			            	}
			                
			            } 
			        }

			    }

		    }

		@endphp




	</div> 

</div>
@endsection

@section('meta')
  <title>Tradeshows Circu Magical Furniture - Luxury brand for children</title>
  <meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
  <meta name="author" content="circu">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="All Products Circu Magical Furniture - Luxury brand for children" />
  <meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta property="og:url" content="http://www.circu.net/pressroom/tradeshows"/>
  <meta property="og:site_name" content="Circu Magical Furniture" />
  <meta property="og:image" content="http://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection