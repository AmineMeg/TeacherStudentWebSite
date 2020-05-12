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

/* moodle/createExercice.html.twig */
class __TwigTemplate_0946150a3695d06afea5d9b2398a494e7f347bb4bcb43629dd2b0d4554ddd6e9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moodle/createExercice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moodle/createExercice.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "moodle/createExercice.html.twig", 1);
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
        echo "\t<div id=\"page_entiere\" style=\"width:100%;\">

\t\t<div id=\"page_droite\" style=\"float:right; width:75%;\">
\t\t\t<div id=\"espace_titre\" data-role=\"header\" data-position=\"fixed\" data-tap-toggle=\"false\" data-update-page-padding=\"false\">
\t\t\t\t<input class=\"retour\" type=\"button\" value=\"     RETOUR\" onclick=\"goBack()\">
\t\t\t\t<h2>Créer un nouvel exercice dans le cours : 
\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "!</h2>
\t\t\t</div>
\t\t\t<div id=\"contenu_exercice_1\">

\t\t\t\t<div id=\"formulaire_creation_exercice\" align=\"center\">

\t\t\t\t\t";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "

\t\t\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), 'row', ["label" => "Titre de l'exercice", "attr" => ["placeholder" => "Une titre accrocheur ?"]]);
        // line 23
        echo "

\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "enonce", [], "any", false, false, false, 25), 'row', ["label" => "Enoncé", "attr" => ["placeholder" => "Alors la c'est freestyle"]]);
        // line 30
        echo "

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-succes\">
\t\t\t\t\t\tEnregistrer</button>

\t\t\t\t\t";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
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
        return "moodle/createExercice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  98 => 30,  96 => 25,  92 => 23,  90 => 18,  85 => 16,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div id=\"page_entiere\" style=\"width:100%;\">

\t\t<div id=\"page_droite\" style=\"float:right; width:75%;\">
\t\t\t<div id=\"espace_titre\" data-role=\"header\" data-position=\"fixed\" data-tap-toggle=\"false\" data-update-page-padding=\"false\">
\t\t\t\t<input class=\"retour\" type=\"button\" value=\"     RETOUR\" onclick=\"goBack()\">
\t\t\t\t<h2>Créer un nouvel exercice dans le cours : 
\t\t\t\t{{titre}}!</h2>
\t\t\t</div>
\t\t\t<div id=\"contenu_exercice_1\">

\t\t\t\t<div id=\"formulaire_creation_exercice\" align=\"center\">

\t\t\t\t\t{{ form_start(form) }}

\t\t\t\t\t{{form_row (form.titre, {
                'label': 'Titre de l\\'exercice',
                'attr':{
                    'placeholder' : 'Une titre accrocheur ?' 
                    }
                })}}

\t\t\t\t\t{{form_row (form.enonce, {
                    'label': 'Enoncé',
                    'attr':{
                        'placeholder' : 'Alors la c\\'est freestyle' 
                        }
                    })}}

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-succes\">
\t\t\t\t\t\tEnregistrer</button>

\t\t\t\t\t{{form_end(form)}}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "moodle/createExercice.html.twig", "C:\\Users\\kreek\\OneDrive\\Documents\\Cours\\2019\\S6\\PrograWeb\\ProjetFinal\\Moodle\\templates\\moodle\\createExercice.html.twig");
    }
}
