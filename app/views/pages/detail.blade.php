@extends('layout.front')

@section('content')
<div id="home">
    <div class="row">
        <div class="col-md-8" id="detail-view">
            <div class="row visible-xs">
                <div class="col-md-12">
                    @include('partials.identity')
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h2>SEWING TABLE</h2>
                    <div class="item">
                        <img src="{{ URL::to('/') }}/images/dummy/5.jpg" style="width:100%">
                    </div>
                </div>
                <div class="col-md-4 visible-lg">
                    <label>Quantity</label>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                    </select> set
                    <br />
                    <a class="btn" href="">Add to cart</a>
                </div>
            </div>
            <div class="row">
                <h3>THIS PRODUCT GO ALONG WITH</h3>
                <div class="thumbs">
                    <img src="{{ URL::to('/') }}/images/dummy/2.jpg">
                    <img src="{{ URL::to('/') }}/images/dummy/4.jpg">
                    <img src="{{ URL::to('/') }}/images/dummy/3.jpg">
                </div>
            </div>
        </div>
        <div class="col-md-4 visible-lg">
            <div class="row">
                @include('partials.identity')
            </div>
            <div class="row">
                @include('partials.news')
            </div>
            <div class="row">
                @include('partials.twitter')
            </div>
         </div>
    </div>
</div>
@stop