<fieldset>
    <div class="row">
        <div class="row col-md-12">
            <label class="col-md-2 control-label" for="inputSuccess">Estado Perfil</label>
            <div class="col-md-10">
                @if($dataSpanish->is_active == 'true')
                    <div class="radio col-md-5">
                        <label>
                            <input type="radio" name="is_active"  value="true" checked="true">
                            {!! trans('label.active') !!}
                        </label>
                    </div>
                    <div class="radio col-md-5">
                        <label>
                            <input type="radio" name="is_active"  value="false">
                            {!! trans('label.disable') !!}
                        </label>
                    </div>
                @else
                    <div class="radio col-md-5">
                        <label>
                            <input type="radio" name="is_active"  value="false" checked="true">
                            {!! trans('label.active') !!}
                        </label>
                    </div>
                    <div class="radio col-md-5">
                        <label>
                            <input type="radio" name="is_active"  value="true">
                            {!! trans('label.disable') !!}
                        </label>
                    </div>
                @endif

            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileName">{!! trans('label.name_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control"  name="name" placeholder="Valentina Perez"  value="{!! $dataSpanish->name !!}" required>
            </div>
        </div>
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileAge">{!! trans('label.age_profile') !!}</label>
            <div class="col-md-8">
                <input type="number" class="form-control" name="age"  placeholder="22" value="{!! $dataSpanish->age !!}" required>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="row col-md-6">
            <label class="col-md-4 control-label">{!! trans('label.phone_profile') !!}</label>
            <div class="col-md-8">
                <div class="input-group mb-md">
                <span class="input-group-addon">
                    <i class="fa fa-phone"></i>
                </span>
                    <input type="number" class="form-control" placeholder="111 111 111" name="phone" value="{!! $dataSpanish->phone !!}" required>
                </div>
            </div>
        </div>
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileMeasure">{!! trans('label.measurements_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control"  name="measurements" placeholder="90-60-90" value="{!! $dataSpanish->measurements !!}" required>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileHeight">{!! trans('label.height') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control"  name="height" placeholder="165" value="{!! $dataSpanish->height !!}" required>
            </div>
        </div>
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="inputSuccess">{!! trans('label.category_profile') !!}</label>
            <div class="col-md-8">
                {!! Form::select('category', $category, $dataSpanish->category, ['class' => 'form-control mb-md']) !!}
            </div>
        </div>

    </div>
    <br>

    <div class="row">
        <div class="row col-md-6">
            <label class="col-xs-4 control-label mt-xs pt-none">{!! trans('label.escort_deluxe_profile') !!}</label>
            <div class="col-md-2">
                <div class="checkbox-custom checkbox-default checkbox-inline mt-xs">
                    <input type="checkbox" @if($dataSpanish->deluxe_escort == 'on') checked @endif id="profileDeluxe" name="deluxe_escort">
                    <label for="profileDeluxe"></label>
                </div>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label class="col-xs-4 control-label mt-xs pt-none">{!! trans('label.featured_escort_profile') !!}</label>
            <div class="col-md-2">
                <div class="checkbox-custom checkbox-default checkbox-inline mt-xs">
                    <input type="checkbox" @if($dataSpanish->featured_escort == 'on') checked @endif id="profileFeatured" name="featured_escort">
                    <label for="profileFeatured"></label>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profilePrice">{!! trans('label.pryce_profile') !!}</label>
            <div class="col-md-8">
                <input type="number" class="form-control" name="price" placeholder="125" value="{!! $dataSpanish->price !!}">
            </div>
        </div>
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileNationality">{!! trans('label.nationality_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="nationality" value="{!! $dataSpanish->nationality !!}" required>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileLanguage">{!! trans('label.languages_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="languages" placeholder="Español , Ingles , Portugués" value="{!! $dataSpanish->languages !!}" required>
            </div>
        </div>
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileOrientation">{!! trans('label.sexual_orientation_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="sexual_orientation" placeholder="Bisexualidad " value="{!! $dataSpanish->sexual_orientation !!}" required>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileExit">{!! trans('label.departures_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="departures" value="{!! $dataSpanish->departures !!}" required>
            </div>
        </div>
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileTimetable">{!! trans('label.timetable_profile') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="timetable" placeholder="24 hrs" value="{!! $dataSpanish->timetable !!}" required>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="row col-md-12">
            <label class="col-md-2 control-label" for="textareaDefault">{!! trans('label.description_profile') !!}</label>
            <div class="col-md-10">
                <textarea class="form-control" rows="3"  name="description" required>{!! $dataSpanish->description !!}</textarea>
            </div>
        </div>
    </div>
</fieldset>
<hr class="dotted tall">
<h4 class="mb-xlg">{!! trans('label.data_seo') !!}</h4>
<fieldset>

    <div class="row">
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="profileTitlemeta">{!! trans('label.title_metatags') !!}</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="title_metatags" value="{!! $dataSpanish->title_metatags !!}" required>
            </div>
        </div>
        <div class="row col-md-6">
            <label class="col-md-4 control-label" for="textareaDescmeta">{!! trans('label.description_metatags') !!}</label>
            <div class="col-md-8">
                <textarea class="form-control" rows="3" name="description_metatags" required>{!! $dataSpanish->description_metatags !!}</textarea>
            </div>
        </div>
    </div>
    <br>

    <div class="form-group">
        <label class="col-md-2 control-label" for="textareaKeywords">{!! trans('label.key_words') !!}</label>
        <div class="col-md-6">
            <textarea class="form-control" rows="3" name="key_words" required>{!! $dataSpanish->key_words !!}</textarea>
        </div>
    </div>
</fieldset>

