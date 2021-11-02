@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                  <ul class="list-group">
                      <a href="" class="list-group-item list-group-item-action">View</a>
                      <a href="" class="list-group-item list-group-item-action">Create</a>
                    </ul> 
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Shawarma</div>

                <div class="card-body">
                <div class="form-group">
                   <label for="name">Name of Shawarma</label>
                   <input type="text" class="form-control" name="name">
                   </div>

                   <div class="form-group">
                   <label for="description">Description of Shawarma</label>
                   <textarea class="form-control" name="description"></textarea>
                   </div>

                   <div class="form-inline">
                   <label for="description">Shawarma price</label>
                   <input type="number" class="form-control" placeholder="price of small shawarma">
                   <input type="number" class="form-control" placeholder="medium shawarma">
                   <input type="number" class="form-control" placeholder="large shawarm">
                </div>


                <div class="form-group">
                   <label for="cattegory">Category</label>
                  <select class="form-control">
                      <option ></option>
                      <option value="vegetarian">vegetarian</option>
                      <option value="non-vegetarian">Non-Vegetarian</option>
                      <option value="european">European</option>
                  </select>
                   </div>

                   <div class="form-group">
                   <label for="image">Image</label>
               <input type="file" class="form-control">
                   </div>


                   <div class="form-group" >
            <button class="btn btn-primary" type="submit">Save</button>

                   </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
