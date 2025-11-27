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
                        <div class="fade tab-pane" id="pills-social-media" role="tabpanel" aria-labelledby="pills-social-media-tab">
                            <div class="card">
                                <div class="container-fluid">
                                    <form method="POST" id="hotlr_einvoice_form">
                                        <div class="row gy-3 p-4 mt-0">
                                            <div class="col-md-6 d-none">
                                                <label class="form-label" for="hotlr_einvoice_url">Url <span class="text-danger">*</span></label>
                                                <input class="form-control form-control-sm" id="hotlr_einvoice_url" type="text" placeholder="Enter Url" value="{{$hotlr[0]->einvoice_url}}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="hotlr_einvoice_email">Email <span class="text-danger">*</span></label>
                                                <input class="form-control form-control-sm" id="hotlr_einvoice_email" type="text" placeholder="Enter Email" value="{{$hotlr[0]->einvoice_email}}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="hotlr_einvoice_username">Username <span class="text-danger">*</span></label>
                                                <input class="form-control form-control-sm" id="hotlr_einvoice_username" type="text" placeholder="Enter Username" value="{{$hotlr[0]->einvoice_username}}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="hotlr_einvoice_password">Password <span class="text-danger">*</span></label>
                                                <input class="form-control form-control-sm" id="hotlr_einvoice_password" type="password" placeholder="Enter Password" value="{{$hotlr[0]->einvoice_password}}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="hotlr_einvoice_ipaddress">IP Address <span class="text-danger">*</span></label>
                                                <input class="form-control form-control-sm" id="hotlr_einvoice_ipaddress" type="text" placeholder="Enter IP Address" value="{{$hotlr[0]->einvoice_ipaddress}}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="hotlr_einvoice_clientid">Client Id <span class="text-danger">*</span></label>
                                                <input class="form-control form-control-sm" id="hotlr_einvoice_clientid" type="text" placeholder="Enter Client Id" value="{{$hotlr[0]->einvoice_clientid}}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="hotlr_einvoice_clientsecret">Client Secret <span class="text-danger">*</span></label>
                                                <input class="form-control form-control-sm" id="hotlr_einvoice_clientsecret" type="text" placeholder="Enter Client Secret" value="{{$hotlr[0]->einvoice_clientsecret}}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="hotlr_einvoice_gst">GST <span class="text-danger">*</span></label>
                                                <input class="form-control form-control-sm" id="hotlr_einvoice_gst" type="text" placeholder="Enter Client Secret" maxlength="15" value="{{$hotlr[0]->einvoice_gst}}" required>
                                            </div>
                                            <div class="col-md-12 text-end">
                                                <button type="submit" class="btn btn-primary "> Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="fade tab-pane" id="pills-theme-setup" role="tabpanel" aria-labelledby="pills-theme-setup-tab">
                            <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="card height-equal">
                                                <div class="card-header card-no-border pb-0">
                                                    <h3>Audit Time Setting</h3>
                                                </div>
                                                <div class="card-body">
                                                    <form class="row g-3 needs-validation custom-input invoice-setting-form" novalidate="">
                                                        <div class="col-4">
                                                            <label class="form-label" for="audit_start_general_setting">Start Time</label>
                                                            <input class="form-control" id="audit_start_general_setting" type="time" required="" onchange="chkTime()" value="{{$hotlr[0]->audit_start}}">
                                                            <div class="invalid-feedback">Please enter start time </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="form-label" for="audit_end_general_setting">End Time</label>
                                                            <input class="form-control" id="audit_end_general_setting" type="time"required="" onchange="chkTime()" value="{{$hotlr[0]->audit_end}}">
                                                            <div class="invalid-feedback">Please enter end time </div>
                                                        </div>
                                                        <div class="col-4 d-none">
                                                            <label class="form-label" for="audit_duration_general_setting">Duration</label>
                                                            <input class="form-control" id="audit_duration_general_setting_view" type="text" readonly>
                                                            <input class="form-control" id="audit_duration_general_setting" type="hidden" value="{{$hotlr[0]->duration}}" >
                                                        </div>
                                                        <div class="col-4">
                                                            <button class="btn btn-primary mt-4" type="button" onclick="updateAuditTime()">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="card height-equal">
                                                <div class="card-header card-no-border pb-0">
                                                    <h3>Invoice Setting</h3>
                                                </div>
                                                <div class="card-body">
                                                    <form class="row g-3 needs-validation custom-input invoice-setting-form" novalidate="">
                                                        <div class="col-4">
                                                            <label class="form-label" for="invoice_prefix_general_setting">Prefix</label>
                                                            <input class="form-control" id="invoice_prefix_general_setting" type="text" placeholder="Prefix" required="" value="{{$prefix}}">
                                                            <div class="invalid-feedback">Please enter prefix </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="form-label" for="invoice_suffix_general_setting">Suffix Length</label>
                                                            <input class="form-control" id="invoice_suffix_general_setting" type="number" placeholder="Enter Suffix Length" required="" value="{{$suffix_length}}">
                                                            <div class="invalid-feedback">Please enter suffix length </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <button class="btn btn-primary mt-4" type="button" onclick="updateInvoiceSettingDetail()">Submit</button>
                                                        </div>
                                                    </form>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p class="f-m-light mt-1">Reset Button will Reset the Invoice Number</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <button class="btn btn-primary mt-4" type="button" onclick="resetInvoiceNumber()">Reset Invoice</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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