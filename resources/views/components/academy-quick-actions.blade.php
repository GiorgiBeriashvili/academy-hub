<div class="position-absolute bottom-0 bottom-sm-auto top-sm-0 right-0"> <!-- position-absolute = position: absolute, bottom-0 = bottom: 0, bottom-sm-auto = bottom: auto only on small screens and up (> 576px), top-sm-0 = top: 0 only on small screens and up (> 576px), right-0 = right: 0 -->
    @can('verify', $academy)
        <button id="verification-action-{{ $academy->id }}" class="btn btn-square @if($academy->verified) btn-secondary @else btn-success @endif btn-sm m-5" type="button"
                onclick="verifyAcademy({{ $academy->id }})"> <!-- m-10 = margin: 1rem (10px) -->
            <i class="fa @if($academy->verified) fa-check-circle-o @else fa-check-circle-o @endif text-white"></i>
        </button>
    @endcan
    @can('update', $academy)
        <button class="btn btn-square btn-primary btn-sm m-5 ml-0" type="button"
                onclick="location.href = '{{ route('academies.edit', ['academy' => $academy]) }}'"> <!-- m-10 = margin: 1rem (10px) -->
            <i class="fa fa-edit"></i>
        </button>
    @endcan
    @can('delete', $academy)
        <button class="btn btn-square btn-danger btn-sm m-5 ml-0" type="button"
                onclick="destroyAcademy({{ $academy->id }});"> <!-- m-10 = margin: 1rem (10px) -->
            <i class="fa fa-trash"></i>
        </button>
    @endcan
</div>
