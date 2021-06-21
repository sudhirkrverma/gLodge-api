@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="font-weight-bold text-center">
        || Government Lodge Management System ||
    </h2>
    <h5 class="text-center text-secondary">The Department desires to implement a comprehensive integrated Web based ‘gLodge Management System’ application for various request for rooms,food,conference hall, Managing and monitoring of various resources of gLodge house like Front Office,Pantry,Inventory,House keeping and accounts.</h5>
    <h4 class="text-center mt-4"><b>What is gLodge Management System?</b></h4>
    <div class="about p-4">
    <h4 class="text-info">About</h4>
    <h5>Till now, the management of circuit houses has been processing through mails or calls and manual record keeping was a common procedure. But, we have a web application that will automate majority of gLodge house operations and will be called as gLodge  Management System(GLMS).
        </h5>
    <li>This paperless & effortless solution will change the face of circuit house management.</li>
</div>
<div class="about my-4 p-4">
<h4 class="text-info">Vision</h4>
<h5>The Vision of the project are:</h5>
<li>Online Tracking of any gLodge Room booking and its Services at real time.</li>
<li>Totally Transparent transaction.</li>
<li>SMS and email intimations to stakeholders.</li>
<li>System integrated with Government rules.</li>
</div>
    </div>

</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('This is my contact details') }}
                </div>
            </div>
        </div>
    </div>
</div> -->


@endsection
