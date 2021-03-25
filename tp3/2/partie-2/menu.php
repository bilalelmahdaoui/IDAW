<?php

function renderLoggedOutMenu()
{

  echo "<nav>
          <ul>
            <li><a href=\"login.php\">Login</a></li>
            <li><a href=\"inscription.php\">Register</a></li>
            <li><a href=\"index.php\">Back to Homepage</a></li>
          </ul>
        </nav>";
}

function renderLoggedInMenu()
{

  echo "<nav>
          <ul>
            <li><a href=\"home.php\">Home</a></li>
            <li><a href=\"blog.php\">Blog</a></li>
            <li><a href=\"logout.php\">Logout</a></li>
          </ul>
        </nav>";
}
