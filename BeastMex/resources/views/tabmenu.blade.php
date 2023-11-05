<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<div class="container">
    <div class="d-block d-sm-none">
      <label for="Tab" class="sr-only">Tab</label>
  
      <select id="Tab" class="form-select w-100 rounded border border-gray-200">
        <option>Settings</option>
        <option>Messages</option>
        <option>Archive</option>
        <option selected>Notifications</option>
      </select>
    </div>
  
    <div class="d-none d-sm-block">
      <div class="border-bottom border-gray-200">
        <ul class="nav nav-tabs gap-3">
          <li class="nav-item">
            <a
              href="/gerenciaCRUD"
              class="nav-link p-3 text-sm font-weight-medium text-muted text-decoration-none"
            >
              Settings
            </a>
          </li>
  
          <li class="nav-item">
            <a
              href="#"
              class="nav-link p-3 text-sm font-weight-medium text-muted text-decoration-none"
            >
              Messages
            </a>
          </li>
  
          <li class="nav-item">
            <a
              href="#"
              class="nav-link p-3 text-sm font-weight-medium text-muted text-decoration-none"
            >
              Archive
            </a>
          </li>
  
          <li class="nav-item">
            <a
              href="#"
              class="nav-link rounded-top border border-gray-300 border-bottom-0 p-3 text-sm font-weight-medium text-primary"
            >
              Notifications
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  