<ul class="list-inline me-auto mb-0">
    <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit contact">
        <a href="{{ route('admin.contact.edit', $contact->id) }}" class="avtar avtar-xs btn-link-success btn-pc-default">
            <i class="ti ti-edit-circle f-18"></i>
        </a>
    </li>
    <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
        title="Delete contact">
        <a href="javascript:;" onclick="deleteContact({{ $contact->id }})" class="avtar avtar-xs btn-link-danger btn-pc-default">
            <i class="ti ti-trash f-18"></i>
        </a>
    </li>
</ul>