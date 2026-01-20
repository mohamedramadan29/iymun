<div class="text-left modal fade" id="edit_user{{ $user->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel2">
                    <i class="la la-road2"></i> تعديل حالة الطلب
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('dashboard.user.change_status',$user->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input class="form-control" type="text" disabled readonly value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <select name="status" class="form-control">
                            <option value="" selected> -- تغير حالة الطلب -- </option>
                            <option @selected($user->application_status_from_admin == 'pending') value="pending"> pending </option>
                            <option @selected($user->application_status_from_admin == 'approved') value="approved"> approved </option>
                            <option @selected($user->application_status_from_admin == 'rejected') value="rejected"> rejected </option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        تعديل حالة الطلب
                    </button>
                    <button type="button" class="btn grey btn-outline-secondary btn-sm" data-dismiss="modal">
                        رجوع
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
