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
            'javascript' => [$this, 'block_javascript'],
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
        // line 10
        echo "    </head>


<header class=\"landing-page sidebar-collapse\">
  <nav class=\"navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg\" color-on-scroll=\"100\" id=\"sectionsNav\">
    <div class=\"container\">
      <div class=\"navbar-translate\">
        <a class=\"navbar-brand\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("moodle");
        echo "\">

          <div class=\"col-sm-2\">
            <img src=\"/images/logo.png\" alt=\"Rounded Image\" class=\"rounded img-fluide\" height=\"550%\" width=\"550%\">
          </div>

        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      </div>



      <div class=\"collapse navbar-collapse\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"dropdown nav-item\">
            ";
        // line 37
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37)) {
            // line 38
            echo "            <a href=\"#\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
              <i class=\"material-icons\">Inscription / Connexion</i>
            </a>
            <div class=\"dropdown-menu dropdown-with-icons\">
            <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
            echo "\" class=\"dropdown-item\">

                <i class=\"material-icons\">Inscrit-toi</i>
              </a>
              <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"dropdown-item\">

                <i class=\"material-icons\">Connecte-toi</i>
              </a>
            </div>
";
        } else {
            // line 52
            echo "
<li class=\"dropdown nav-item\">

              <a href=\"/monCompte\" class=\"nav-link\">

                <i class=\"material-icons\">Mon espace</i>
              </a>
</li>
<li class=\"dropdown nav-item\">

              <a href=\"/createCours\" class=\"nav-link\">

                <i class=\"material-icons\">Cours</i>
              </a>

</li>
<li class=\"dropdown nav-item\">
              <a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link\">

              <i class=\"material-icons\">Deconnexion</i>
            </a>
     </li>
            ";
        }
        // line 75
        echo "          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>


";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "

<!--   Core JS Files   -->
<script src=\"/material-kit-master/assets/js/core/jquery.min.js\" type=\"text/javascript\"></script>

<script src=\"/material-kit-master/assets/js/core/popper.min.js\" type=\"text/javascript\"></script>
<script src=\"/material-kit-master/assets/js/core/bootstrap-material-design.min.js\" type=\"text/javascript\"></script>
<script src=\"/material-kit-master/assets/js/plugins/moment.min.js\"></script>
<!--\tPlugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src=\"/material-kit-master/assets/js/plugins/bootstrap-datetimepicker.js\" type=\"text/javascript\"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src=\"/material-kit-master/assets/js/plugins/nouislider.min.js\" type=\"text/javascript\"></script>
<!--  Google Maps Plugin    -->
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src=\"/material-kit-master/assets/js/material-kit.js?v=2.0.7\" type=\"text/javascript\"></script>
";
        // line 101
        $this->displayBlock('javascript', $context, $blocks);
        // line 104
        echo "
</html>";
        
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
        echo "              <link href=\"\\material-kit-master\\assets\\css\\material-kit.css\" rel=\"stylesheet\"/>
              
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 84
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 102
        echo "
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
        return array (  257 => 102,  247 => 101,  236 => 84,  226 => 83,  214 => 7,  204 => 6,  185 => 5,  174 => 104,  172 => 101,  155 => 86,  153 => 83,  143 => 75,  134 => 69,  115 => 52,  106 => 46,  99 => 42,  93 => 38,  91 => 37,  68 => 17,  59 => 10,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
              <link href=\"\\material-kit-master\\assets\\css\\material-kit.css\" rel=\"stylesheet\"/>
              
        {% endblock %}
    </head>


<header class=\"landing-page sidebar-collapse\">
  <nav class=\"navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg\" color-on-scroll=\"100\" id=\"sectionsNav\">
    <div class=\"container\">
      <div class=\"navbar-translate\">
        <a class=\"navbar-brand\" href=\"{{path('moodle')}}\">

          <div class=\"col-sm-2\">
            <img src=\"/images/logo.png\" alt=\"Rounded Image\" class=\"rounded img-fluide\" height=\"550%\" width=\"550%\">
          </div>

        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      </div>



      <div class=\"collapse navbar-collapse\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"dropdown nav-item\">
            {% if not app.user %}
            <a href=\"#\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
              <i class=\"material-icons\">Inscription / Connexion</i>
            </a>
            <div class=\"dropdown-menu dropdown-with-icons\">
            <a href=\"{{path('signup')}}\" class=\"dropdown-item\">

                <i class=\"material-icons\">Inscrit-toi</i>
              </a>
              <a href=\"{{path('login')}}\" class=\"dropdown-item\">

                <i class=\"material-icons\">Connecte-toi</i>
              </a>
            </div>
{% else %}

<li class=\"dropdown nav-item\">

              <a href=\"/monCompte\" class=\"nav-link\">

                <i class=\"material-icons\">Mon espace</i>
              </a>
</li>
<li class=\"dropdown nav-item\">

              <a href=\"/createCours\" class=\"nav-link\">

                <i class=\"material-icons\">Cours</i>
              </a>

</li>
<li class=\"dropdown nav-item\">
              <a href=\"{{path('logout')}}\" class=\"nav-link\">

              <i class=\"material-icons\">Deconnexion</i>
            </a>
     </li>
            {% endif %}
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>


{% block body %}

{% endblock %}


<!--   Core JS Files   -->
<script src=\"/material-kit-master/assets/js/core/jquery.min.js\" type=\"text/javascript\"></script>

<script src=\"/material-kit-master/assets/js/core/popper.min.js\" type=\"text/javascript\"></script>
<script src=\"/material-kit-master/assets/js/core/bootstrap-material-design.min.js\" type=\"text/javascript\"></script>
<script src=\"/material-kit-master/assets/js/plugins/moment.min.js\"></script>
<!--\tPlugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src=\"/material-kit-master/assets/js/plugins/bootstrap-datetimepicker.js\" type=\"text/javascript\"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src=\"/material-kit-master/assets/js/plugins/nouislider.min.js\" type=\"text/javascript\"></script>
<!--  Google Maps Plugin    -->
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src=\"/material-kit-master/assets/js/material-kit.js?v=2.0.7\" type=\"text/javascript\"></script>
{% block javascript %}

{% endblock %}

</html>", "base.html.twig", "C:\\Users\\kreek\\OneDrive\\Documents\\Cours\\2019\\S6\\PrograWeb\\ProjetFinal\\newMoodle\\moodle\\templates\\base.html.twig");
    }
}
