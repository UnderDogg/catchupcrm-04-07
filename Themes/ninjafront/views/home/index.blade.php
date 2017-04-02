@extends('partials.header')

@section('head')
    @parent


    <script src="{!! asset('js/Chart.min.js') !!}" type="text/javascript"></script>
    <script src="{{ asset('js/daterangepicker.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet" type="text/css"/>

@stop

@section('content')



    <div class="row">
        <div class="col-md-2">
            <ol class="breadcrumb">
                <li class='active'>{{ trans('texts.dashboard') }}</li>
            </ol>
        </div>

        <div class="col-md-10">


        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body revenue-panel">
                    <div style="overflow:hidden">
                        <div class="in-thin">
                            {{ trans('texts.total_revenue') }}
                        </div>
                        <div class="revenue-div in-bold pull-right" style="color:#337ab7">
                        </div>
                        <div class="in-bold">

                            <div class="currency currency" style="display:none">
                                space
                            </div>

                            <div class="currency currency_blank" style="display:none">
                                &nbsp;
                            </div>
                        </div>
                        <div class="range-label-div in-thin pull-right" style="color:#337ab7;font-size:16px;">
                            {{ trans('texts.last_30_days') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body expenses-panel">
                    <div style="overflow:hidden">

                        <div class="in-thin">
                            {{ trans('texts.average_invoice') }}
                        </div>
                        <div class="average-div in-bold pull-right" style="color:#337ab7">
                        </div>
                        <div class="in-bold">

                            <div class="currency currency" style="display:none">
                                space
                            </div>
                            <div class="currency currency_blank" style="display:none">
                                &nbsp;
                            </div>
                        </div>

                        <div class="range-label-div in-thin pull-right" style="color:#337ab7;font-size:16px;">
                            {{ trans('texts.last_30_days') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body outstanding-panel">
                    <div style="overflow:hidden">
                        <div class="in-thin">
                            {{ trans('texts.outstanding') }}
                        </div>
                        <div class="outstanding-div in-bold pull-right" style="color:#337ab7">
                        </div>
                        <div class="in-bold">

                            <div class="currency currency" style="display:none">
                                space
                            </div>

                            <div class="currency currency_blank" style="display:none">
                                &nbsp;
                            </div>
                        </div>
                        <div class="range-label-div in-thin pull-right" style="color:#337ab7;font-size:16px;">
                            {{ trans('texts.last_30_days') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default dashboard" style="height:320px">
                <div class="panel-heading" style="background-color:#286090 !important">
                    <h3 class="panel-title in-bold-white">
                        <i class="glyphicon glyphicon-exclamation-sign"></i> {{ trans('texts.activity') }}
                    </h3>
                </div>
                <ul class="panel-body list-group" style="height:276px;overflow-y:auto;">

                    <li class="list-group-item">
                        <span style="color:#888;font-style:italic">activity</span>
                    </li>

                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default dashboard" style="height:320px;">
                <div class="panel-heading" style="margin:0; background-color: #f5f5f5 !important;">
                    <h3 class="panel-title" style="color: black !important">payments?
                        <i class="glyphicon glyphicon-ok-sign"></i> {{ trans('texts.recent_payments') }}
                    </h3>
                </div>
                <div class="panel-body" style="height:274px;overflow-y:auto;">
                    <table class="table table-striped">
                        <thead>
                        <th>{{ trans('texts.invoice_number_short') }}</th>
                        <th>{{ trans('texts.client') }}</th>
                        <th>{{ trans('texts.payment_date') }}</th>
                        <th>{{ trans('texts.amount') }}</th>
                        </thead>
                        <tbody>
                        temp
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default dashboard" style="height:320px;">
                <div class="panel-heading" style="margin:0; background-color: #f5f5f5 !important;">
                    <h3 class="panel-title" style="color: black !important">
                        <i class="glyphicon glyphicon-time"></i> {{ trans('texts.upcoming_invoices') }}
                    </h3>
                </div>
                <div class="panel-body" style="height:274px;overflow-y:auto;">
                    <table class="table table-striped">
                        <thead>
                        <th>{{ trans('texts.invoice_number_short') }}</th>
                        <th>{{ trans('texts.client') }}</th>
                        <th>{{ trans('texts.due_date') }}</th>
                        <th>{{ trans('texts.balance_due') }}</th>
                        </thead>
                        <tbody>
                        upcoming
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default dashboard" style="height:320px">
                <div class="panel-heading" style="background-color:#777 !important">
                    <h3 class="panel-title in-bold-white">
                        <i class="glyphicon glyphicon-time"></i> {{ trans('texts.invoices_past_due') }}
                    </h3>
                </div>
                <div class="panel-body" style="height:274px;overflow-y:auto;">
                    <table class="table table-striped">
                        <thead>
                        <th>{{ trans('texts.invoice_number_short') }}</th>
                        <th>{{ trans('texts.client') }}</th>
                        <th>{{ trans('texts.due_date') }}</th>
                        <th>{{ trans('texts.balance_due') }}</th>
                        </thead>
                        <tbody>
                        pastdue
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default dashboard" style="height:320px;">
                <div class="panel-heading" style="margin:0; background-color: #f5f5f5 !important;">
                    <h3 class="panel-title" style="color: black !important">
                        <i class="glyphicon glyphicon-time"></i> {{ trans('texts.upcoming_quotes') }}
                    </h3>
                </div>
                <div class="panel-body" style="height:274px;overflow-y:auto;">
                    <table class="table table-striped">
                        <thead>
                        <th>{{ trans('texts.quote_number_short') }}</th>
                        <th>{{ trans('texts.client') }}</th>
                        <th>{{ trans('texts.valid_until') }}</th>
                        <th>{{ trans('texts.amount') }}</th>
                        </thead>
                        <tbody>
                        quotes
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default dashboard" style="height:320px">
                <div class="panel-heading" style="background-color:#777 !important">
                    <h3 class="panel-title in-bold-white">
                        <i class="glyphicon glyphicon-time"></i> {{ trans('texts.expired_quotes') }}
                    </h3>
                </div>
                <div class="panel-body" style="height:274px;overflow-y:auto;">
                    <table class="table table-striped">
                        <thead>
                        <th>{{ trans('texts.quote_number_short') }}</th>
                        <th>{{ trans('texts.client') }}</th>
                        <th>{{ trans('texts.valid_until') }}</th>
                        <th>{{ trans('texts.amount') }}</th>
                        </thead>
                        <tbody>
                        pastdue quotes
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




@stop
