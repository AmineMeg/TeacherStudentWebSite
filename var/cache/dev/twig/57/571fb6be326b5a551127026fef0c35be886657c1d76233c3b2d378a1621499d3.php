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
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "\t</head>
\t<body>

\t\t<div id=\"page_gauche\" style=\"float:left; width:25%;\">
\t\t\t<div id=\"espace_logo\" style=\"text-align:center\"><img src=\"/images/logo.png\"></div>
\t\t\t<br>
\t\t\t<div id=\"espace_profilepic\" style=\"text-align:center\"><img id=\"connect\" src=\"/images/login.png\"></div>
\t\t\t<div id=\"espace_connexion\">
\t\t\t\t<div id=\"box_menu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"lien_about_us\">
\t\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t\t<h3 class=\"liste_menu\">&nbsp;&nbsp;&nbsp;ABOUT US</h3>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"icone_profil\">
\t\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t\t<h3 id=\"mon_compte\" class=\"liste_menu\">&nbsp;&nbsp;&nbsp;MON COMPTE</h3>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"lien_notes\">
\t\t\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createCours");
        echo "\">
\t\t\t\t\t\t\t\t<h3 class=\"liste_menu\">&nbsp;&nbsp;&nbsp;Cours</h3>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div><br><br>


\t\t\t\t\t<input
\t\t\t\t\tid=\"connect\" type=\"submit\" value=\"  SIGNIN/LOGIN\">

\t\t\t\t\t<!-- The Modal -->
\t\t\t\t\t<div
\t\t\t\t\t\tid=\"myModal\" class=\"modal\">

\t\t\t\t\t\t<!-- Modal content -->
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<span class=\"close\">&times;</span>
\t\t\t\t\t\t\t\t<h3>REJOIGNEZ-NOUS !</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-body\" style=\"text-align:center;\">
\t\t\t\t\t\t\t\t<div class=\"connexion_box\">
\t\t\t\t\t\t\t\t\t<h4>Déjà  inscrit ? Connectez-vous !</h4>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\">connectez-vous</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t</br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"inscription_box\">
\t\t\t\t\t\t<h4>Nouveau ? Créeez votre compte dés maintenant !</h4>
\t\t\t\t\t\t<a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        echo "\">
\t\t\t\t\t\t\t<button type=\"button\">inscrivez-vous</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</br>
\t\t\t\t</br>
\t\t\t</br>
\t\t</body>
\t</html>
</br></div></div></div></div><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" \"><input id=\"deconnect\" type=\"submit\" value=\"  SE DECONNECTER\"></a></div></div>";
        $this->displayBlock('body', $context, $blocks);
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "</body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base.css"), "html", null, true);
        echo "\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script>var modal = document.getElementById('myModal');
var btn = document.getElementById(\"connect\");
var span = document.getElementsByClassName(\"close\")[0];
btn.onclick = function () {
modal.style.display = \"block\";
}
span.onclick = function () {
modal.style.display = \"none\";
}
window.onclick = function (event) {
if (event.target == modal) {
modal.style.display = \"none\";
}
}</script><script>function goBack() {
window.history.back()
}</script>";
        
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
        return array (  193 => 74,  180 => 10,  170 => 9,  150 => 6,  139 => 89,  134 => 74,  123 => 66,  111 => 57,  84 => 33,  61 => 12,  59 => 9,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/base.css') }}\">
\t\t{% endblock %}
\t</head>
\t<body>

\t\t<div id=\"page_gauche\" style=\"float:left; width:25%;\">
\t\t\t<div id=\"espace_logo\" style=\"text-align:center\"><img src=\"/images/logo.png\"></div>
\t\t\t<br>
\t\t\t<div id=\"espace_profilepic\" style=\"text-align:center\"><img id=\"connect\" src=\"/images/login.png\"></div>
\t\t\t<div id=\"espace_connexion\">
\t\t\t\t<div id=\"box_menu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"lien_about_us\">
\t\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t\t<h3 class=\"liste_menu\">&nbsp;&nbsp;&nbsp;ABOUT US</h3>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"icone_profil\">
\t\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t\t<h3 id=\"mon_compte\" class=\"liste_menu\">&nbsp;&nbsp;&nbsp;MON COMPTE</h3>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"lien_notes\">
\t\t\t\t\t\t\t<a href=\"{{path('createCours')}}\">
\t\t\t\t\t\t\t\t<h3 class=\"liste_menu\">&nbsp;&nbsp;&nbsp;Cours</h3>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div><br><br>


\t\t\t\t\t<input
\t\t\t\t\tid=\"connect\" type=\"submit\" value=\"  SIGNIN/LOGIN\">

\t\t\t\t\t<!-- The Modal -->
\t\t\t\t\t<div
\t\t\t\t\t\tid=\"myModal\" class=\"modal\">

\t\t\t\t\t\t<!-- Modal content -->
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<span class=\"close\">&times;</span>
\t\t\t\t\t\t\t\t<h3>REJOIGNEZ-NOUS !</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-body\" style=\"text-align:center;\">
\t\t\t\t\t\t\t\t<div class=\"connexion_box\">
\t\t\t\t\t\t\t\t\t<h4>Déjà  inscrit ? Connectez-vous !</h4>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('login')}}\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\">connectez-vous</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t</br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"inscription_box\">
\t\t\t\t\t\t<h4>Nouveau ? Créeez votre compte dés maintenant !</h4>
\t\t\t\t\t\t<a href=\"{{path('signup')}}\">
\t\t\t\t\t\t\t<button type=\"button\">inscrivez-vous</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</br>
\t\t\t\t</br>
\t\t\t</br>
\t\t</body>
\t</html>
</br></div></div></div></div><a href=\"{{path('logout')}}\" \"><input id=\"deconnect\" type=\"submit\" value=\"  SE DECONNECTER\"></a></div></div>{% block body %}{% endblock %}{% block javascripts %}<script>var modal = document.getElementById('myModal');
var btn = document.getElementById(\"connect\");
var span = document.getElementsByClassName(\"close\")[0];
btn.onclick = function () {
modal.style.display = \"block\";
}
span.onclick = function () {
modal.style.display = \"none\";
}
window.onclick = function (event) {
if (event.target == modal) {
modal.style.display = \"none\";
}
}</script><script>function goBack() {
window.history.back()
}</script>{% endblock %}</body></html>
", "base.html.twig", "C:\\Users\\kreek\\OneDrive\\Documents\\Cours\\2019\\S6\\PrograWeb\\ProjetFinal\\Moodle\\templates\\base.html.twig");
    }
}
