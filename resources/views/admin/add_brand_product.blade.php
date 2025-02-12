@extends('admin_layout')

@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Create brand product
            </header>
            <?php
                $message = Session::get('message');
                if ($message) {
                    echo "<p style='color: red; font-weight: bold;'>$message</p>";
                    Session::put('message', null);
                }
            ?>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Brand name</label>
                            <input type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="brand name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description brand</label>
                            <textarea style = "resize:none" rows = "5" type="password" name="brand_product_desc" class="form-control" id="exampleInputPassword1" placeholder="brand Description"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Display</label>
                            <select name="brand_product_status" class="form-control input-sm m-bot15">
                                <option value="0">Show</option>
                                <option value="1">Hide</option>
                            </select>
                        </div>
                        <button type="submit" name="add_brand_product" class="btn btn-info">Create brand</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
