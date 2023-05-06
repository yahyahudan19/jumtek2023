@extends('layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="modal fade" id="addOrderModalside">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Event</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="text-black font-w500">Event Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Event Date</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Description</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Peserta</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Detail</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Detail Peserta</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="#" method="post">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="mis_peserta">MIS PMI
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="mis_peserta" name="mis_peserta" value="{{$peserta->mis_peserta}}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nama_peserta">Nama Lengkap
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_peserta" name="nama_peserta" value="{{$peserta->nama_peserta}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="unit_peserta">Unit PMI
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control default-select" id="unit_peserta" name="unit_peserta">
                                                    <option value="{{$peserta->unit->id_unit}}">{{$peserta->unit->nama_unit}} || Unit Saat Ini</option>
                                                    @foreach ($data_unit as $unit)
                                                        <option value="{{$unit->id_unit}}">{{$unit->nama_unit}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="kta_peserta">KTA Peserta
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="kta_peserta" name="kta_peserta" value="..and confirm it!">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Best Skill
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control default-select" id="val-skill" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="html">HTML</option>
                                                    <option value="css">CSS</option>
                                                    <option value="javascript">JavaScript</option>
                                                    <option value="angular">Angular</option>
                                                    <option value="angular">React</option>
                                                    <option value="vuejs">Vue.js</option>
                                                    <option value="ruby">Ruby</option>
                                                    <option value="php">PHP</option>
                                                    <option value="asp">ASP.NET</option>
                                                    <option value="python">Python</option>
                                                    <option value="mysql">MySQL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Currency
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-currency" name="val-currency" placeholder="$21.60">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-website">Website
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-website" name="val-website" placeholder="http://example.com">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-phoneus">Phone (US)
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="212-999-0000">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Digits <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-digits" name="val-digits" placeholder="5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-number">Number <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-number" name="val-number" placeholder="5.0">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-range">Range [1, 5]
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-range" name="val-range" placeholder="4">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label"><a
                                                    href="javascript:void()">Terms &amp; Conditions</a> <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                    <input type="checkbox" class="css-control-input mr-2"
                                                        id="val-terms" name="val-terms" value="1">
                                                    <span class="css-control-indicator"></span> I agree to the
                                                    terms</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop