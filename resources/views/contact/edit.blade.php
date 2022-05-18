<?php
/**
 * Created by PhpStorm.
 * User: Rinaldi
 * Date: 04/07/2020
 * Time: 10:03
 */ ?>

@extends('contact ')
@section('main')
    <?php
    $contact = $data['contact'];
    ?>
    <div class="row">
        <div class="col-md-8 offset-sm-2 mb-2">
            <h2 class="display-6">Edit Data</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <form action="{{ url("/contacts/{$contact->id}")}}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">FUll Name:</label>
                    <input type="text" value="{{$contact->name}}" name="full_name" class="form-control" >
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
