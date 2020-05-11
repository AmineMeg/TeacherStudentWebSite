<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_8835060e13cb395b9786537c27ffbd3a3144d7c1921b20f43afc2ea34a7e775c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>

      <div id=\"page_gauche\" style=\"float:left; width:25%;\">
        <div id=\"espace_logo\" style=\"text-align:center\"><img src=\"/images/logo.png\"></div>
        <br>
        <div id=\"espace_profilepic\" style=\"text-align:center\"><img id=\"connect\" src=\"/images/login.png\"></div>
        <div id=\"espace_connexion\">
          <div id=\"box_menu\">
            <ul>
\t            <li class=\"lien_about_us\"><a href=\"/\"><h3 class=\"liste_menu\">&nbsp;&nbsp;&nbsp;ABOUT US</h3></a></li>
              <li class=\"icone_profil\"><a href=\"/\"><h3 id=\"mon_compte\" class=\"liste_menu\">&nbsp;&nbsp;&nbsp;MON COMPTE</h3></a></li>
              <li class=\"lien_notes\"><a href=\"/\"><h3 class=\"liste_menu\">&nbsp;&nbsp;&nbsp;NOTES</h3></a></li>
            </ul>
          </div><br><br>

\t 
          <input id=\"connect\" type=\"submit\" value=\"  SIGNIN/LOGIN\">

          <!-- The Modal -->
          <div id=\"myModal\" class=\"modal\">
\t  
            <!-- Modal content -->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <span class=\"close\">&times;</span>
                <h3>REJOIGNEZ-NOUS !</h3>
              </div>
              <div class=\"modal-body\" style=\"text-align:center;\">
                <div class=\"connexion_box\"><h4>Déjà  inscrit ? Connectez-vous !</h4><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\"><button type=\"button\">connectez-vous</button></a></br></br></br></div>
                <div class=\"inscription_box\"><h4>Nouveau ? Créeez votre compte dés maintenant !</h4><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        echo "\"><button type=\"button\">inscrivez-vous</button></a></br></br></br></br></div>
              </div>
            </div>
          </div>
\t        <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\"\"><input id=\"deconnect\" type=\"submit\" value=\"  SE DECONNECTER\"></a>
        
        </div>
      </div>
      ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "
      ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "            <script>
          var modal = document.getElementById('myModal');
        var btn = document.getElementById(\"connect\");
        var span = document.getElementsByClassName(\"close\")[0];
        btn.onclick = function() {
          modal.style.display = \"block\";
        }
        span.onclick = function() {
          modal.style.display = \"none\";
        }
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = \"none\";
          }
        }
        </script>
        <script>
            function goBack() {
                window.history.back()
            }
        </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 51,  189 => 50,  179 => 48,  169 => 47,  156 => 7,  146 => 6,  127 => 5,  115 => 73,  113 => 50,  110 => 49,  108 => 47,  101 => 43,  94 => 39,  90 => 38,  59 => 9,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/base.css') }}\">
        {% endblock %}
    </head>
    <body>

      <div id=\"page_gauche\" style=\"float:left; width:25%;\">
        <div id=\"espace_logo\" style=\"text-align:center\"><img src=\"/images/logo.png\"></div>
        <br>
        <div id=\"espace_profilepic\" style=\"text-align:center\"><img id=\"connect\" src=\"/images/login.png\"></div>
        <div id=\"espace_connexion\">
          <div id=\"box_menu\">
            <ul>
\t            <li class=\"lien_about_us\"><a href=\"/\"><h3 class=\"liste_menu\">&nbsp;&nbsp;&nbsp;ABOUT US</h3></a></li>
              <li class=\"icone_profil\"><a href=\"/\"><h3 id=\"mon_compte\" class=\"liste_menu\">&nbsp;&nbsp;&nbsp;MON COMPTE</h3></a></li>
              <li class=\"lien_notes\"><a href=\"/\"><h3 class=\"liste_menu\">&nbsp;&nbsp;&nbsp;NOTES</h3></a></li>
            </ul>
          </div><br><br>

\t 
          <input id=\"connect\" type=\"submit\" value=\"  SIGNIN/LOGIN\">

          <!-- The Modal -->
          <div id=\"myModal\" class=\"modal\">
\t  
            <!-- Modal content -->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <span class=\"close\">&times;</span>
                <h3>REJOIGNEZ-NOUS !</h3>
              </div>
              <div class=\"modal-body\" style=\"text-align:center;\">
                <div class=\"connexion_box\"><h4>Déjà  inscrit ? Connectez-vous !</h4><a href=\"{{path('login')}}\"><button type=\"button\">connectez-vous</button></a></br></br></br></div>
                <div class=\"inscription_box\"><h4>Nouveau ? Créeez votre compte dés maintenant !</h4><a href=\"{{path('signup')}}\"><button type=\"button\">inscrivez-vous</button></a></br></br></br></br></div>
              </div>
            </div>
          </div>
\t        <a href=\"{{path('logout')}}\"\"><input id=\"deconnect\" type=\"submit\" value=\"  SE DECONNECTER\"></a>
        
        </div>
      </div>
      {% block body %}
      {% endblock %}

      {% block javascripts %}
            <script>
          var modal = document.getElementById('myModal');
        var btn = document.getElementById(\"connect\");
        var span = document.getElementsByClassName(\"close\")[0];
        btn.onclick = function() {
          modal.style.display = \"block\";
        }
        span.onclick = function() {
          modal.style.display = \"none\";
        }
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = \"none\";
          }
        }
        </script>
        <script>
            function goBack() {
                window.history.back()
            }
        </script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\kreek\\OneDrive\\Documents\\Cours\\2019\\S6\\PrograWeb\\ProjetFinal\\Moodle\\templates\\base.html.twig");
    }
}
