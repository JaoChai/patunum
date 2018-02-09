        @extends('layout_admin.master')
        @section('content')

                        <div class="page-content-wrapper">
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light bordered">
                                            <div class="portlet-body form">


                                        <!-- Form Setting !-->

                                        @include('partials.errors')

                                        <form action="{{ route('set.update')}}" method="post" class="form-horizontal" enctype="multipart/form-data">

                                          {{ csrf_field() }}

                                        <h3 class="form-section">Setting WebSite</h3>

                                        <div class="form-group">
                                             <label class="control-label col-md-3">Logo</label>
                                                    <div class="col-md-9">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="{{ asset('http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image') }}" alt="" /> </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="file" name="logo"> </span>
                                                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                             <div class="form-group">
                                                <label class="col-md-3 control-label" for="title">Site Title :</label>
                                                    <div class="col-md-7">
                                                 <input id="" type="text" name="sitetitle" class="form-control" value="{{ $settings->sitetitle }}"></div>
                                             </div>

                                             <div class="form-group">
                                                <label class="col-md-3 control-label" for="title">Meta Description :</label>
                                                    <div class="col-md-7">
                                                <textarea name="meta_des" class="form-control" rows="3" value="">{{ $settings->meta_des }}</textarea>
                                            </div>
                                            </div>

                                             <div class="form-group">
                                                <label class="col-md-3 control-label" for="title">Meta Keyword :</label>
                                                    <div class="col-md-7">
                                                <input id="" type="text" name="meta_key" class="form-control" value="{{ $settings->meta_key }}"></div>
                                            </div>

                                            <div class="form-group">
                                                    <label class="col-md-3 control-label" for="title">Chat :</label>
                                                        <div class="col-md-7">
                                                    <textarea name="chat" class="form-control" rows="3" value="">{{ $settings->chat }}</textarea>
                                                </div>
                                            </div>

                                            <h3 class="form-section">Address</h3>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="title">Address :</label>
                                                    <div class="col-md-7">
                                                <textarea name="address" class="form-control" rows="3" value="">{{ $settings->address }}</textarea>
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="title">Phone :</label>
                                                    <div class="col-md-7">
                                                <input id="" type="text" name="phone" class="form-control" value="{{ $settings->phone }}"></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="title">Email :</label>
                                                    <div class="col-md-7">
                                                <input id="" type="text" name="email" class="form-control" value="{{ $settings->email }}"></div>
                                            </div>



                                            <h3 class="form-section">Social</h3>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="title">Facebook :</label>
                                                    <div class="col-md-7">
                                                <input id="" type="text" name="facebook" class="form-control" value="{{ $settings->facebook }}"></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="title">Twitter :</label>
                                                    <div class="col-md-7">
                                                <input id="" type="text" name="twitter" class="form-control" value="{{ $settings->twitter }}"></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="title">Google+ :</label>
                                                    <div class="col-md-7">
                                                <input id="" type="text" name="google" class="form-control" value="{{ $settings->google }}"></div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="title">Line :</label>
                                                    <div class="col-md-7">
                                                <input id="" type="text" name="line" class="form-control" value="{{ $settings->line }}"></div>
                                            </div>

                                                    <div class="form-group margin-top-30">
                                                        <label class="col-md-3 control-label" for="title"></label>
                                                        <div class="col-md-7">
                                                            <button type="submit" class="btn blue btn-lg pull-right">Save</button>
                                                        </div>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                        <!-- END PORTLET-->
                                    </div>
                                </div>
                            </div>
                            <!-- END CONTENT BODY -->
                        </div>

        @endsection
