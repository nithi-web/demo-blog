      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
          <a class="navbar-brand" href="/home">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="{{ route('friends.show', Auth::user()->id) }}">Friends <span class="sr-only">(current)</span></a>
                  </li>
                  &nbsp;
                  <li class="nav-item active">
                      <a class="nav-link" href="{{ route('user.edit', Auth::user()->id) }}">Profile</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="/logout">Logout</a>
                  </li>
          </div>
          </li>



          </ul>


      </nav>
