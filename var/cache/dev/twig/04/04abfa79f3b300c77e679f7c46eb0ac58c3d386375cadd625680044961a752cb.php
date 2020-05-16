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

/* security/login.html.twig */
class __TwigTemplate_f40a3309180875a56b32cc0017b4293b4f52545521e324cf5b65dd890b1c6f54 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-header header-filter\" style=\"background-image: url('/material-kit-master/assets/img/bg7.jpg'); background-size: cover; background-position: top center;\">

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-6 ml-auto mr-auto\">
\t\t\t\t<div class=\"card card-login\">
                    <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
\t\t\t\t\t\t<div class=\"card-header card-header-primary text-center\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Connexion</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<form action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\"method=\"post\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"></span>
\t\t\t\t\t\t\t\t</div>
                            <input placeholder=\"Adresse email ...\" type=\"text\" require name=\"_username\" class=\"form-control\">


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
                                        <br>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
                                    
                                <input placeholder=\"Mot de passe...\" type=\"password\" require name=\"_password\" class=\"form-control\">



\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer text-center\">
                            <button type=\"submit\" class=\"btn btn-succes\">
                                    Connexion
                            </button>

\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<div class=\"page-header header-filter\" style=\"background-image: url('/material-kit-master/assets/img/bg7.jpg'); background-size: cover; background-position: top center;\">

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-6 ml-auto mr-auto\">
\t\t\t\t<div class=\"card card-login\">
                    <form action=\"{{ path('login') }}\" method=\"post\">
\t\t\t\t\t\t<div class=\"card-header card-header-primary text-center\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Connexion</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<form action=\"{{ path('login') }}\"method=\"post\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"></span>
\t\t\t\t\t\t\t\t</div>
                            <input placeholder=\"Adresse email ...\" type=\"text\" require name=\"_username\" class=\"form-control\">


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
                                        <br>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
                                    
                                <input placeholder=\"Mot de passe...\" type=\"password\" require name=\"_password\" class=\"form-control\">



\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer text-center\">
                            <button type=\"submit\" class=\"btn btn-succes\">
                                    Connexion
                            </button>

\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>



{% endblock %}
", "security/login.html.twig", "C:\\Users\\kreek\\OneDrive\\Documents\\Cours\\2019\\S6\\PrograWeb\\ProjetFinal\\newMoodle\\moodle\\templates\\security\\login.html.twig");
    }
}
