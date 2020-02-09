@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
    <div class="col-3 p-5">
			<img src="https://scontent-sjc3-1.cdninstagram.com/v/t51.2885-19/s150x150/69053350_2481826655379188_2415872297446408192_n.jpg?_nc_ht=scontent-sjc3-1.cdninstagram.com&_nc_ohc=uR5ekugJ1ggAX8gwxRI&oh=1c16cdfdc7a876fa6087e16aa00e043b&oe=5EC0EDD3" class="rounded-circle"/>  
    </div>
		<div class="col-9 p-5">
			<div><h1>{{ $user->username }}</h1></div>	
			<div class="d-flex">
				<div class="pr-5"><strong>929</strong> posts</div>
				<div class="pr-5"><strong>69.8k</strong> followers</div>
				<div class="pr-5"><strong>140</strong> following</div>
			</div>
			<div class="pt-4"><strong>Amsterdam Airport Schiphol</strong></div>
			<div>
			  ✈️ Your adventure starts here <br/>
			  📍 Tag your travels with <a href="#">#Schiphol </a><br/>
			  🌍 Connecting your world
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-4">
			<img src="https://scontent-sjc3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.162.1300.1300a/s640x640/82790908_1572979829506364_8974770827428991032_n.jpg?_nc_ht=scontent-sjc3-1.cdninstagram.com&_nc_cat=108&_nc_ohc=eoK02_RnxBUAX-IoNw3&oh=c751a98edb5afe25d25a7f009e846b68&oe=5EDC8C7B" class="w-100">
		</div>
		<div class="col-4">
			<img src="https://scontent-sjc3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/82990096_118190456251356_8161286014322627720_n.jpg?_nc_ht=scontent-sjc3-1.cdninstagram.com&_nc_cat=100&_nc_ohc=tx8TxuGtYucAX85s-0A&oh=5c79c21a6c152c2a670c3d1e66259e12&oe=5EC5CEF4" class="w-100">
		</div>
		<div class="col-4">
			<img src="https://scontent-sjc3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c180.0.1080.1080a/s640x640/82250509_580316886160735_8773648332787351073_n.jpg?_nc_ht=scontent-sjc3-1.cdninstagram.com&_nc_cat=107&_nc_ohc=-4Bj5eV_clcAX_6B1dp&oh=940c24445bf562dcdbf5fc76e0cfac84&oe=5ED85E11" class="w-100">
		</div>
	</div>	
</div>
@endsection
