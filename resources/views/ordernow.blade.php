@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
            <tr>
                <td>Amount</td>
                <td>$ {{$total}}</td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>$ 0</td>
            </tr>
            <tr>
                <td>Dilevery</td>
                <td>$ 10</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td> $ {{$total+10}}</td>
            </tr>
            
            </tbody>
    </table>
    <div>
        <form action="/orderplace" method="POST">
        @csrf
            <div class="form-group">
                <label for="email">Email address:</label>
                <textarea name="address" placeholder="Enter your Address" class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <label for="pwd">Payment Method:</label><br><br>
                <input value="cash" type="radio" name="payment" id=""><span> Online Payment</span><br><br>
                <input value="cash" type="radio" name="payment" id=""><span> EMI Payment</span><br><br>
                <input value="cash" type="radio" name="payment" id=""><span> Payment on Dilevery</span><br><br>
            </div>
            
            <button type="submit" class="btn btn-default">Order Now</button>
        </form>
    </div>
    </div>
</div>
@endsection