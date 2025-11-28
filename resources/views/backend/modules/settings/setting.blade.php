@extends('backend.layouts.main')
@section('title','Setting')
@section('main-container')
<div class="page-body">
    
    <!-- Container-fluid starts-->
    <div class="container-fluid py-3">
        <div class="email-wrap bookmark-wrap">
            <div class="row">
                <div class="col-xl-3 box-col-6">
                    @include('backend.layouts.sidebar_setting')
                </div>
                <div class="col-xl-9 col-md-12 box-col-12">
                    <div class="tab-content tabs-links">
                        <div class="tab-pane fade active show " id="pills-genral-setting" role="tabpanel" aria-labelledby="pills-genral-setting-tab">
                            <div class="card">
                                <div class="container-fluid">
                                    <form method="POST" id="hotlr_setting_form">
                                        <div class="row gy-3 p-4 mt-0">
                                            <div class="col-md-6 ">
                                                <label class="form-label" for="setting_hotlr_name">Name <span class="text-danger">*</span></label>
                                                <input class="form-control form-control-sm" id="setting_hotlr_name" type="text" placeholder="Name" value="{{$hotlr[0]->name}}" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="form-label" for="setting_hotlr_gst">GST <span class="text-danger">*</span></label>
                                                <input class="form-control form-control-sm" id="setting_hotlr_gst" type="text" placeholder="GST" maxlength="15" value="{{$hotlr[0]->gst}}" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="form-label" for="setting_hotlr_email">Email </label>
                                                <input class="form-control form-control-sm" id="setting_hotlr_email" type="text" placeholder="Email" value="{{$hotlr[0]->email}}" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="form-label" for="setting_hotlr_contact">Contact Number </label>
                                                <input class="form-control form-control-sm" id="setting_hotlr_contact" type="number" placeholder="Contact Number" value="{{$hotlr[0]->mobile}}" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="form-label" for="setting_hotlr_address">Address </label>
                                                <input class="form-control form-control-sm" id="setting_hotlr_address" type="text" placeholder="Address" value="{{$hotlr[0]->address}}" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="form-label" for="setting_hotlr_city">City </label>
                                                <input class="form-control form-control-sm" id="setting_hotlr_city" type="text" placeholder="City" value="{{$hotlr[0]->city}}" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="form-label" for="setting_hotlr_state">State </label>
                                                <input class="form-control form-control-sm" id="setting_hotlr_state" type="text" placeholder="State" value="{{$hotlr[0]->state}}" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="form-label" for="setting_hotlr_zipcode">Zip Code </label>
                                                <input class="form-control form-control-sm" id="setting_hotlr_zipcode" type="number" placeholder="Zip code" value="{{$hotlr[0]->pincode}}" required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="form-label" for="setting_hotlr_country">Country </label>
                                                <input class="form-control form-control-sm" id="setting_hotlr_country" type="text" placeholder="Country" value="{{$hotlr[0]->country}}" required>
                                            </div>
                                            
                                            <div class="col-md-6 ">
                                                <label class="form-label" for="setting_hotlr_website">Website</label>
                                                <input class="form-control form-control-sm" id="setting_hotlr_website" type="text" placeholder="Site url" value="{{$hotlr[0]->website}}">
                                            </div>
                                            <div class="col-md-6 d-flex">
                                                <div class="theme-logo">
                                                    <div id="logo-img"><img alt="" src="{{ asset('backend/'.$hotlr[0]->logo.'')}}" style="width: 150px;"></div>
                                                    <p>Logo</p>
                                                </div>
                                                <div class="m-4">
                                                    <label class="form-label" for="hotlr-upload-logo">Upload logo </label>
                                                    <input class="form-control" type="file" aria-label="file example" id="hotlr-upload-logo" accept="image/*">
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-end">
                                                <button type="submit" class="btn btn-primary"> Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
     
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
@section('extra-js')
<script>
    const settingAdd = "{{ route('setting.store') }}";
    const settingAddEinvoice = "{{ route('setting.storeEInvoice') }}";

    const updateInvoiceGeneralSetting = "{{ route('general-setting-invoice.updateInvoice') }}";
    const resetInvoice = "{{ route('general-setting-invoice-reset.resetInvoiceNumber') }}";
    const updateAuditSetting = "{{ route('audit-setting-update') }}";
</script>
<script src="{{asset('backend/assets/js/custom/setting/setting.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/setting/general_setting.js')}}"></script>
<script src="{{asset('backend/assets/js/custom/setting/audit.js')}}"></script>
@endsection