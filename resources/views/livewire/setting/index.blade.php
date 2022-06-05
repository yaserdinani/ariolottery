<div class="mt-3">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">شناسه</th>
            <th scope="col">رتبه موقت</th>
            <th scope="col">رتبه کلی</th>
            <th scope="col">ویرایش</th>
          </tr>
        </thead>
        <tbody>
            @foreach($settings as $setting)
                <tr>
                    <th scope="row">{{$setting->id}}</th>
                    <td>{{$setting->tmp_level}}</td>
                    <td>{{$setting->max_level}}</td>
                    <td>
                        <button class="btn btn-outline-warning" type="submit" wire:click="setSettingId({{ $setting->id }})" data-toggle="modal" data-target="#addScoreModal">ویرایش</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    <!-- Add User Modal -->
    <div wire:ignore.self class="modal fade" id="addScoreModal" tabindex="-1" role="dialog" aria-labelledby="addScoreModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addScoreModalLabel">ویرایش</h5>
                </div>
               <div class="modal-body d-flex">
                    <div class="form-group col-md-6" style="text-align:right;">
                        <label for="tmp_level">رتبه موقت</label>
                        <input type="number" class="form-control" id="tmp_level" wire:model.lazy='tmp_level' autocomplete="off">
                    </div>
                    <div class="form-group col-md-6" style="text-align:right;">
                        <label for="max_level">رتبه کلی</label>
                        <input type="number" class="form-control" id="max_level" wire:model.lazy='max_level' autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click.prevent="edit()" class="btn btn-success close-modal" data-dismiss="modal">ویرایش</button>
                </div>
            </div>
        </div>
    </div>
</div>
