<div class="mt-3">
    <div style="text-align:right;">
        <button class="btn btn-outline-success mb-3" type="submit" data-toggle="modal" data-target="#addScoreModal">افزودن کاربر</button>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">شناسه</th>
            <th scope="col">نام کاربری</th>
            <th scope="col">حذف</th>
          </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->user_name}}</td>
                    <td>
                        <button class="btn btn-outline-danger" type="submit" wire:click="setUserId({{ $user->id }})" data-toggle="modal" data-target="#deleteModal">حذف</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      {{-- delete modal --}}
      <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">تایید برای حذف</h5>
                </div>
               <div class="modal-body">
                    <p>آیا شما از حذف کاربر اطمینان دارید؟</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">خیر</button>
                    <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-dismiss="modal">بله،حذف گردد</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add User Modal -->
    <div wire:ignore.self class="modal fade" id="addScoreModal" tabindex="-1" role="dialog" aria-labelledby="addScoreModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addScoreModalLabel">افزودن کاربر</h5>
                </div>
               <div class="modal-body d-flex">
                    <div class="form-group col-md-6" style="text-align:right;">
                        <label for="user_name">نام کاربری</label>
                        <input type="text" class="form-control" id="user_name" wire:model.lazy='user_name' autocomplete="off">
                    </div>
                    <div class="form-group col-md-6" style="text-align:right;">
                        <label for="score">امتیاز</label>
                        <input type="number" class="form-control" id="score" wire:model.lazy='score' autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click.prevent="addUser()" class="btn btn-success close-modal" data-dismiss="modal">افزودن</button>
                </div>
            </div>
        </div>
    </div>
</div>
