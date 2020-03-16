@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.view-cust.title'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>@lang('labels.backend.customer.name')</th>
                            <th>@lang('labels.backend.customer.email')</th>
                            <th>@lang('labels.backend.customer.phone')</th>
                            <th>@lang('labels.backend.customer.address')</th>
                            <th>@lang('labels.backend.customer.join-date')</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->nama }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->nomor }}</td>
                                <td>{{ $customer->alamat }}</td>
                                <td>{{ $customer->created_at }} ( {{ $customer->created_at->diffForHumans() }} )</td>
                                <td>
                                  <div class="btn-group btn-group-sm" role="group" aria-label="@lang('labels.backend.access.users.user_actions')">
                                      <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')">
                                          <i class="fas fa-edit"></i>
                                      </a>

                                      <a href="#"
                                         data-method="delete"
                                         data-trans-button-cancel="@lang('buttons.general.cancel')"
                                         data-trans-button-confirm="@lang('buttons.general.crud.delete')"
                                         data-trans-title="@lang('strings.backend.general.are_you_sure')"
                                         class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.delete')">
                                          <i class="fas fa-trash"></i>
                                      </a>
                                  </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! $customers->total() !!} {{ trans_choice('labels.backend.access.users.table.total', $customers->total()) }}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {!! $customers->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
