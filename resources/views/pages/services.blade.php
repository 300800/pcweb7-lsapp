@extends('layouts.app')

    @section('content')
    <h1>{{$title}}</h1>
        
        <div class="jumbotron text-center">
            <div class="row">
            <div class="col-8">              
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-newhelper-list" data-toggle="list" href="#list-newhelper" role="tab" aria-controls="newhelper">New helper</a>
                    <a class="list-group-item list-group-item-action" id="list-transferhelper-list" data-toggle="list" href="#list-transfer" role="tab" aria-controls="transferhelper">Transfer helper</a>
                    <a class="list-group-item list-group-item-action" id="list-renewals-list" data-toggle="list" href="#list-renewals" role="tab" aria-controls="renewals">Renewals of work permits and other passes</a>
                    <a class="list-group-item list-group-item-action" id="list-homeleave-list" data-toggle="list" href="#list-homeleave" role="tab" aria-controls="homeleave">Home Leave Documentation</a>
                    <a class="list-group-item list-group-item-action" id="list-passport-list" data-toggle="list" href="#list-passport" role="tab" aria-controls="passport">Passport Renewal</a>
                    <a class="list-group-item list-group-item-action" id="list-applicationpr-list" data-toggle="list" href="#list-applicationpr" role="tab" aria-controls="applicationpr">Application for PR</a>
                </div>
        </div>
        </div>
            <div class="col-10">
                    <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-newhelper" role="tabpanel" aria-labelledby="list-newhelper-list">Our new helpers are recruited from the Philippines.</div>
                    <div class="tab-pane fade" id="list-transferhelper" role="tabpanel" aria-labelledby="list-transferhelper-list">Our transfer helpers are reliable and trustworthy.</div>
                    <div class="tab-pane fade" id="list-homeleave" role="tabpanel" aria-labelledby="list-homeleave-list">We handle documentation for home leave.</div>
                    <div class="tab-pane fade" id="list-passport" role="tabpanel" aria-labelledby="list-passport-list">We handle documentation for passport renewals</div>
                    <div class="tab-pane fade" id="list-applicationpr" role="tabpanel" aria-labelledby="list-applicationpr-list">We handle applications for PR.</div>
                </div>
            </div>
                            
    @endsection

 
    
        