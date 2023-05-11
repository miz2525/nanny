@extends('admin.layouts.app')

@section('page-title') {{ config('app.name', 'NannyGenie') }} - @if(isset($nanny)) Update Nanny @else Add Nanny @endif @endsection

@section('styles')
<!-- Plugins css-->
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="all-nannies.php">All nannies</a></li>
                    <li class="breadcrumb-item active">Nanny name</li>
                </ol>
            </div>
            <h4 class="page-title">@if (isset($nanny) ) Edit Nanny @else Add Nanny @endif</h4>
        </div>
    </div>
</div>
<!-- end page title -->

@include( 'admin.layouts.partials.errors-display' )

@if (isset($nanny))
<form action="{{ route('admin.nanny.update', $nanny->id) }}" method="POST" id="nanny-form">
@else
<form action="{{ route('admin.nanny.store') }}" method="POST" id="nanny-form">
@endif

@csrf
<div class="row">
    <div class="col-lg-6">



        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>


                <div class="mb-3">
                    <label class="mb-2">Status <span class="text-danger">*</span></label>
                    <br/>
                    @foreach (config('nanny.status') as $statusKey=>$statusValue)
                        <div class="radio form-check-inline">
                            <input type="radio" id="{{$statusKey}}" value="{{$statusKey}}" name="nanny[status]" @if(isset($nanny)) @if($statusKey==$nanny->status) checked @endif  @else @if($statusKey=='active') checked @endif @endif>
                            <label for="{{$statusKey}}"> {{$statusValue}} </label>
                        </div>
                    @endforeach
                </div>


                <div class="mb-3">
                    <label for="first_name" class="form-label">First name <span class="text-danger">*</span></label>
                    <input type="text" id="first_name" class="form-control" placeholder="e.g : Apple iMac" name="nanny[first_name]" value="{{isset($nanny)? $nanny->first_name : ''}}">
                </div>

                <div class="mb-3">
                    <label for="family_name" class="form-label">Family name <span class="text-danger">*</span></label>
                    <input type="text" id="family_name" class="form-control" placeholder="e.g : Apple iMac" name="nanny[family_name]" value="{{isset($nanny)? $nanny->family_name : ''}}">
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone number <span class="text-danger">*</span></label>
                    <input type="text" id="phone_number" class="form-control" placeholder="e.g : +923244734545" name="nanny[phone_number]" value="{{isset($nanny)? $nanny->phone_number : ''}}">
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="mb-2">Driving license <span class="text-danger">*</span></label>
                            <br/>
                            <div class="radio form-check-inline">
                                <input type="radio" id="driving_license_1" value="1" name="nanny[driving_license]" @if(isset($nanny)) @if($nanny->driving_license) checked @endif @else checked @endif>
                                <label for="driving_license_1"> Yes </label>
                            </div>
                            <div class="radio form-check-inline">
                                <input type="radio" id="driving_license_0" value="0" name="nanny[driving_license]" @if(isset($nanny)) @if(!$nanny->driving_license) checked @endif @endif>
                                <label for="driving_license_0"> No </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="mb-2">Ok with Pet Friendly homes <span class="text-danger">*</span></label>
                            <br/>
                            <div class="radio form-check-inline">
                                <input type="radio" id="pet_friendly_1" value="1" name="nanny[pet_friendly]" @if(isset($nanny)) @if($nanny->pet_friendly) checked @endif @else checked @endif>
                                <label for="pet_friendly_1"> Yes </label>
                            </div>
                            <div class="radio form-check-inline">
                                <input type="radio" id="pet_friendl0" value="0" name="nanny[pet_friendly]" @if(isset($nanny)) @if(!$nanny->pet_friendly) checked @endif @endif>
                                <label for="pet_friendl0"> No </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="intro" class="form-label">
                        The intro part (<a href="https://nimb.ws/pCxvan" target="_blank">this one</a>) <span class="text-danger">*</span>
                    </label>
                    <textarea class="form-control" id="intro" rows="10" placeholder="Please enter here" name="nanny[intro]">{{isset($nanny->intro)? $nanny->intro : ''}}</textarea>
                </div>

            </div>
        </div> <!-- end card -->




        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Quick facts</h5>

                <div class="mb-3">
                    
                    <label for="date_of_birth" class="form-label">Date of birth <span class="text-danger">*</span></label>
                    <input class="form-control" id="date_of_birth" type="date" name="nanny[date_of_birth]" value="{{isset($nanny)? date('Y-m-d', strtotime($nanny->date_of_birth)) : ''}}">
                </div>


                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="experience_years" class="form-label">Experience (years) <span class="text-danger">*</span></label>
                            <select class="form-select" id="experience_years" name="nanny[experience_years]">
                                @for ($i = 1; $i <= 40; $i++)
                                    <option value="{{$i}}" @if(isset($nanny) && $nanny->experience_years==$i) selected @endif>{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="nationality_id" class="form-label">Nationality <span class="text-danger">*</span></label>
                            <select class="form-select" id="nationality_id" name="nanny[nationality_id]">
                                @foreach (GetCountriesCache() as $country)
                                    <option value="{{ $country->id }}" @if(isset($nanny) && $nanny->nationality_id==$country->id) selected @endif>{{ $country->nicename }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="city_id" class="form-label">City</label>
                            <select class="form-select" id="city_id" name="nanny[city_id]">
                                @foreach (GetCitiesCache() as $city)
                                    <option value="{{ $city->id }}" @if(isset($nanny) && $nanny->city_id==$city->id) selected @endif>{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>


                <div class="mb-3">
                    <label for="start_work" class="form-label">Ready to start work from <span class="text-danger">*</span></label>
                    <input class="form-control" id="start_work" type="date" name="nanny[start_work]" value="{{isset($nanny)? date('Y-m-d', strtotime($nanny->start_work)) : ''}}">
                </div>


            </div>
        </div> <!-- end card -->






        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">In-depth profile</h5>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label class="mb-2">Open to work <span class="text-danger">*</span></label>
                            <br/>
                            @foreach (config('nanny.open_to_work') as $OTWK=>$OTWV)
                                <div class="radio form-check-inline">
                                    <input type="radio" id="{{$OTWK}}" value="{{$OTWK}}" name="nanny[open_to_work]" @if(isset($nanny)) @if($OTWK==$nanny->open_to_work) checked @endif  @else @if($OTWK=='live_in') checked @endif @endif>
                                    <label for="{{$OTWK}}"> {{$OTWV}} </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="salary_live_in" class="form-label">Salary (live-in)</label>
                            <input type="number" id="salary_live_in" class="form-control" placeholder="Enter amount in AED" name="nanny[salary_live_in]" value="{{isset($nanny)? $nanny->salary_live_in : ''}}">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="salary_live_out" class="form-label">Salary (live-out)</label>
                            <input type="number" id="salary_live_out" class="form-control" placeholder="Enter amount in AED" name="nanny[salary_live_out]" value="{{isset($nanny)? $nanny->salary_live_out : ''}}">
                        </div>
                    </div>

                </div>


                <div class="mb-3">
                    <label for="visa_status" class="form-label">Visa status <span class="text-danger">*</span></label>
                    <select class="form-select" id="visa_status" name="nanny[visa_status]">
                        @foreach (config('nanny.visa_status') as $VSK=>$VSV)
                            <option value="{{$VSK}}" @if(isset($nanny) && $nanny->visa_status==$VSK) selected @endif>{{$VSV}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="education_level" class="form-label">Education level <span class="text-danger">*</span></label>
                    <select class="form-select" id="education_level" name="nanny[education_level]">
                        @foreach (config('nanny.education_level') as $ELK=>$ELV)
                            <option value="{{$ELK}}" @if(isset($nanny) && $nanny->education_level==$ELK) selected @endif>{{$ELV}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="row">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="languages" class="form-label">Language {{$i+1}} <span class="text-danger">*</span></label>
                                <select class="form-select" id="languages" name="nanny[languages][language_id][]">
                                    @foreach (GetLanguagesCache() as $language)
                                        <option value="{{ $language->id }}" @if(isset($languages) && $languages[$i]->id==$language->id) selected @endif>{{ $language->name.' ('.$language->native_name.')' }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="languages_levels" class="form-label">Language {{$i+1}} - level <span class="text-danger">*</span></label>
                                <select class="form-select" id="languages_levels" name="nanny[languages][language_level][]">
                                    @foreach (config('nanny.langugage_levels') as $level)
                                        <option value="{{ $level }}" @if(isset($languages) && $languages[$i]->level==$level) selected @endif>{{ $level }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @endfor


                    <label for="age_group_experience" class="form-label">Age groups experience <span class="text-danger">*</span></label>

                    <div class="row">
                        @foreach (config('nanny.age_group_experience') as $AGEK=>$AGEV)
                            <div class="col-4">
                                <div class="form-check mb-2 form-check-primary">
                                    <input class="form-check-input" type="checkbox" id="{{ $AGEK }}" name="nanny[age_group_experience][]" value="{{$AGEV}}" @if(isset($nanny) && in_array($AGEK, explode(',', $nanny->age_group_experience))) checked @endif>
                                    <label class="form-check-label" for="{{ $AGEK }}">{{$AGEV}}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>

            </div>
        </div> <!-- end card -->




        <div class="card">
            <div class="card-body">

                @foreach (config('nanny.background_types') as $BTK=>$BTV)

                @php
                    $background = isset($nanny)? GetNannyBackgroundByKey($BTK, $nanny->backgrounds) : false;
                @endphp

                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">{{$BTV}}</h5>

                <div class="mb-3">
                    <label for="work_title_{{$BTK}}" class="form-label">Work description <span class="text-danger">*</span></label>
                    <input type="text" id="work_title_{{$BTK}}" class="form-control" placeholder="e.g : Nanny / House Help | Dubai | Lebanese Family 2 kids, age 3, infant" name="nannies_backgrounds[{{$BTK}}][work_title]" value="{{($background)? $background['work_title'] : ''}}">
                    <span class="help-block"><small>Example: Nanny / House Help | Dubai | Lebanese Family 2 kids, age 3, infant</small></span>
                </div>

                <div class="mb-3">
                    <label for="work_period_{{$BTK}}" class="form-label">Work period <span class="text-danger">*</span></label>
                    <input type="text" id="work_period_{{$BTK}}" class="form-control" placeholder="e.g : January 2017 - Present" name="nannies_backgrounds[{{$BTK}}][work_period]" value="{{($background)? $background['work_period'] : ''}}">
                    <span class="help-block"><small>Example: January 2017 - Present</small></span>
                </div>

                <div class="mb-3">
                    <label class="mb-2">Status <span class="text-danger">*</span></label>
                    <br/>
                    <div class="radio form-check-inline">
                        <input type="radio" id="status_{{$BTK}}_1" value="1" name="nannies_backgrounds[{{$BTK}}][status]" @if(isset($backgrounds)) @if($background && $background['status']) checked @endif  @else checked @endif>
                        <label for="status_{{$BTK}}_1"> Checked </label>
                    </div>
                    <div class="radio form-check-inline">
                        <input type="radio" id="status_{{$BTK}}_0" value="0" name="nannies_backgrounds[{{$BTK}}][status]" @if(isset($backgrounds)) @if($background && !$background['status']) checked @endif  @endif>
                        <label for="status_{{$BTK}}_0"> Not checked </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="work_description_{{$BTK}}" class="form-label">
                        Work description (<a href="https://nimb.ws/3G7rTI" target="_blank">this one</a>) <span class="text-danger">*</span>
                    </label>
                    <textarea class="form-control" id="work_description_{{$BTK}}" rows="10" placeholder="Please enter here" name="nannies_backgrounds[{{$BTK}}][work_description]">{{($background)? $background['work_description'] : ''}}</textarea>
                </div>

                <hr />

                <div class="mb-3">
                    <label for="resourse_title_{{$BTK}}" class="form-label">Reference title (if any)</label>
                    <input type="text" id="resourse_title_{{$BTK}}" class="form-control" placeholder="e.g : Reference check done with Fouad and Diana Bachir" name="nannies_backgrounds[{{$BTK}}][reference_title]" value="{{($background)? $background['reference_title'] : ''}}">
                    <span class="help-block"><small>Example: Reference check done with Fouad and Diana Bachir</small></span>
                </div>

                <div class="mb-3">
                    <label for="reference_description_{{$BTK}}" class="form-label">
                        Reference description (if any) (<a href="https://nimb.ws/dqEGoh" target="_blank">this one</a>)
                    </label>
                    <textarea class="form-control" id="reference_description_{{$BTK}}" rows="10" placeholder="Please enter here" name="nannies_backgrounds[{{$BTK}}][reference_description]">{{($background)? $background['reference_description'] : ''}}</textarea>
                </div>

                @endforeach
            </div>
        </div> <!-- end card -->



        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Psychometric report</h5>

                <div class="mb-3">
                    <label for="psychometric_key_result" class="form-label">
                        Key Results (<a href="https://nimb.ws/TvJYUX" target="_blank">this one</a>)
                    </label>
                    <textarea class="form-control" id="psychometric_key_result" rows="10" placeholder="Please enter here" name="nanny[psychometric_key_result]">{{isset($nanny)? $nanny->psychometric_key_result : ''}}</textarea>
                </div>

                <hr />

                <div class="mb-3">
                    <label for="psychometric_conclusion" class="form-label">
                        Conclusion (<a href="https://nimb.ws/VXbUMk" target="_blank">this one</a>)
                    </label>
                    <textarea class="form-control" id="psychometric_conclusion" rows="10" placeholder="Please enter here" name="nanny[psychometric_conclusion]">{{isset($nanny)? $nanny->psychometric_conclusion : ''}}</textarea>
                </div>

            </div>
        </div> <!-- end card -->




        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Personality report</h5>

                <div class="mb-3">
                    <label for="personality_introduction" class="form-label">
                        Introduction (<a href="https://miz252.nimbusweb.me/share/8727445/pzs9frbwhe96xs5rc2bx" target="_blank">this one</a>)
                    </label>
                    <textarea class="form-control" id="personality_introduction" rows="10" placeholder="Please enter here" name="nanny[personality_introduction]">{{isset($nanny)? $nanny->personality_introduction : ''}}</textarea>
                </div>

                <hr />

                <div class="mb-3">
                    <label for="personality_strength" class="form-label">
                        Strengths (<a href="https://miz252.nimbusweb.me/share/8727445/pzs9frbwhe96xs5rc2bx" target="_blank">this one</a>)
                    </label>
                    <textarea class="form-control" id="personality_strength" rows="10" placeholder="Please enter here" name="nanny[personality_strength]">{{isset($nanny)? $nanny->personality_strength : ''}}</textarea>
                </div>

                <hr />

                <div class="mb-3">
                    <label for="personality_weekness" class="form-label">
                        Weaknesses (<a href="https://miz252.nimbusweb.me/share/8727445/pzs9frbwhe96xs5rc2bx" target="_blank">this one</a>)
                    </label>
                    <textarea class="form-control" id="personality_weekness" rows="10" placeholder="Please enter here" name="nanny[personality_weekness]">{{isset($nanny)? $nanny->personality_weekness : ''}}</textarea>
                </div>

                <hr />

                <div class="mb-3">
                    <label for="personality_opportunity" class="form-label">
                        Opportunities (<a href="https://miz252.nimbusweb.me/share/8727445/pzs9frbwhe96xs5rc2bx" target="_blank">this one</a>)
                    </label>
                    <textarea class="form-control" id="personality_opportunity" rows="10" placeholder="Please enter here" name="nanny[personality_opportunity]">{{isset($nanny)? $nanny->personality_opportunity : ''}}</textarea>
                </div>

                <hr />

                <div class="mb-3">
                    <label for="personality_potential_risk" class="form-label">
                        Potential risks (<a href="https://miz252.nimbusweb.me/share/8727445/pzs9frbwhe96xs5rc2bx" target="_blank">this one</a>)
                    </label>
                    <textarea class="form-control" id="personality_potential_risk" rows="10" placeholder="Please enter here" name="nanny[personality_potential_risk]">{{isset($nanny)? $nanny->personality_potential_risk : ''}}</textarea>
                </div>

                <hr />

                <div class="mb-3">
                    <label for="personality_recommendation" class="form-label">
                        Recommendation (<a href="https://miz252.nimbusweb.me/share/8727445/pzs9frbwhe96xs5rc2bx" target="_blank">this one</a>)
                    </label>
                    <textarea class="form-control" id="personality_recommendation" rows="10" placeholder="Please enter here" name="nanny[personality_recommendation]">{{isset($nanny)? $nanny->personality_recommendation : ''}}</textarea>
                </div>

            </div>
        </div> <!-- end card -->



        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Skills</h5>

                <div class="row">
                    @foreach (config('nanny.skills') as $skillKey=>$skillValue)
                        <div class="col-4">
                            <div class="form-check mb-2 form-check-primary">
                                <input class="form-check-input" type="checkbox" id="{{$skillKey}}" value="{{$skillKey}}" name="nanny[skills][]" @if(isset($nanny) && in_array($skillKey, explode(',', $nanny->skills))) checked @endif>
                                <label class="form-check-label" for="{{$skillKey}}">{{$skillValue}}</label>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div> <!-- end card -->



        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Needs support with</h5>

                <div class="row">
                    @foreach (config('nanny.needs_support_with') as $NSWK=>$NSWV)
                        <div class="col-4">
                            <div class="form-check mb-2 form-check-primary">
                                <input class="form-check-input" type="checkbox" id="{{$NSWK}}" value="{{$NSWK}}" name="nanny[needs_support_with][]" @if(isset($nanny) && in_array($NSWK, explode(',', $nanny->needs_support_with))) checked @endif>
                                <label class="form-check-label" for="{{$NSWK}}">{{$NSWV}}</label>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div> <!-- end card -->



    </div> <!-- end col -->

    <div class="col-lg-6">

        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Nanny images</h5>

                <div class="row">
                    <div class="col-sm-3">
                        <img src="{{ asset('admin/images/users/user-5.jpg') }}" alt="image" class="img-fluid avatar-xl rounded mb-1">
                        <p class="mb-3">
                            <a href="" class="text-danger">
                                <small>
                                    Delete this
                                </small>
                            </a>
                        </p>
                    </div>
                </div>


                <div class="mb-3 mb-xl-0">
                    <label for="nanny_images" class="form-label">Upload new image</label>
                    <input class="form-control" type="file" id="nanny_images" multiple>
                </div>


                <!-- Preview -->
                <div class="dropzone-previews mt-3" id="file-previews"></div>
            </div>
        </div> <!-- end col-->

        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Nanny video</h5>

                <div class="mb-3">
                    <label for="video_link_url" class="form-label">Enter below the video URL</label>
                    <input type="text" class="form-control" id="video_link_url" placeholder="Enter title" name="nanny[video_link_url]" value="{{isset($nanny)? $nanny->video_link_url : ''}}">
                </div>

            </div>
        </div> <!-- end card -->

        @if(isset($nanny))
        <div class="card">
            <div class="card-body">
                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Internal comments</h5>

                <div class="mt-2">
                    @foreach ($nanny->comments as $comment)
                    <div class="d-flex align-items-start mt-3">
                        <div class="w-100">
                            <h5 class="mt-0">
                                {{ $comment->added_person->name }}
                                <small class="text-muted">
                                    {{ date('D, d M Y', strtotime($comment->created_at)) }}
                                </small>
                            </h5>
                            {{ $comment->comment }}
                        </div>
                    </div>
                    @endforeach

                    
                    <div class="d-flex align-items-start mt-3">
                        <div class="w-100">
                            <input type="text" id="nanny_comment" class="form-control form-control-sm form-control-light" placeholder="Add an internal comment" name="nanny_comment">
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-xs waves-effect waves-light mt-2" onclick="add_comment()">Add comment</button>
                </div>

            </div>
        </div> <!-- end card -->
        @endif


    </div> <!-- end col-->
</div>
</form>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="mb-3">
            <button type="button" class="btn btn-primary width-lg waves-effect waves-light" onclick="event.preventDefault(); document.getElementById('nanny-form').submit();">@if(isset($nannyF)) Update @else Save @endif</button>
            <button type="button" class="btn btn-light waves-effect" onclick="event.preventDefault(); window.location = '/admin/all-nannies';">Cancel</button>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->


<!-- file preview template -->
<div class="d-none" id="uploadPreviewTemplate">
    <div class="card mt-1 mb-0 shadow-none border">
        <div class="p-2">
            <div class="row align-items-center">
                <div class="col-auto">
                    <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                </div>
                <div class="col ps-0">
                    <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                    <p class="mb-0" data-dz-size></p>
                </div>
                <div class="col-auto">
                    <!-- Button -->
                    <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                        <i class="dripicons-cross"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@if (isset($nanny))
<form action="{{ route('admin.nanny.comment.store', $nanny->id) }}" method="POST" id="comment-form">
    @csrf
    <input type="hidden" id="comment" class="form-control form-control-sm form-control-light" placeholder="Add an internal comment" name="comment">
</form>
@endif

@endsection

@section('scripts')
<!-- Select2 js-->
<script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
<!-- Dropzone file uploads-->
<script src="{{ asset('admin/libs/dropzone/min/dropzone.min.js') }}"></script>

<!-- Quill js -->
<script src="{{ asset('admin/libs/quill/quill.min.js') }}"></script>

<!-- Init js-->
<script src="{{ asset('admin/js/pages/form-fileuploads.init.js') }}"></script>

<script>
    function add_comment() {
        var comment = $('#nanny_comment').val();
        $('#comment').val(comment);
        $('#comment-form').submit();
    }
</script>
@endsection
