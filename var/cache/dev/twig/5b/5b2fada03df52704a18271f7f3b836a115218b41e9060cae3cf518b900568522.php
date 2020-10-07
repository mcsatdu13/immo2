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

/* bien/index.html.twig */
class __TwigTemplate_2cdb38f27b34cde2e876090b1fcd9be7924e4079e13c0bfa7cbf16dc8c2ef465 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bien/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bien/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bien/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bien index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"text-center\">Bien index</h1>

<!-- Grid row -->
<div class=\"row\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new RuntimeError('Variable "biens" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 11
            echo "  <!-- Grid column -->
    <div class=\"col-md-6 mb-4\">

    <!--Card-->
        <div class=\"card default-color-dark\">

          <!--Card image-->
          <div class=\"view\">
            <img src=\"https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg\" class=\"card-img-top\" alt=\"photo\">
            <a href=\"#\">
              <div class=\"mask rgba-white-slight\"></div>
            </a>
          </div>

          <!--Card content-->
          <div class=\"card-body text-center\">
            <!--Title-->
            <h4 class=\"card-title white-text\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "titre", [], "any", false, false, false, 28), "html", null, true);
            echo "</h4>
                <strong>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "prix", [], "any", false, false, false, 29), "html", null, true);
            echo " €</strong>
            <!--Text-->
            <p class=\"card-text white-text\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "description", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
            <div class=\"d-flex justify-content-around\">
                <p>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "categorie", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-outline-white btn-md waves-effect\">Voir détails</a>
                <p>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "type", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
            </div>
          </div>

        </div>
    <!--/.Card-->

    </div>
  <!-- Grid column -->

  <!-- Grid column -->
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
</div>
<!-- Grid row -->
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bien/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 47,  139 => 35,  135 => 34,  131 => 33,  126 => 31,  121 => 29,  117 => 28,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bien index{% endblock %}

{% block body %}
    <h1 class=\"text-center\">Bien index</h1>

<!-- Grid row -->
<div class=\"row\">
    {% for bien in biens %}
  <!-- Grid column -->
    <div class=\"col-md-6 mb-4\">

    <!--Card-->
        <div class=\"card default-color-dark\">

          <!--Card image-->
          <div class=\"view\">
            <img src=\"https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg\" class=\"card-img-top\" alt=\"photo\">
            <a href=\"#\">
              <div class=\"mask rgba-white-slight\"></div>
            </a>
          </div>

          <!--Card content-->
          <div class=\"card-body text-center\">
            <!--Title-->
            <h4 class=\"card-title white-text\">{{ bien.titre }}</h4>
                <strong>{{ bien.prix }} €</strong>
            <!--Text-->
            <p class=\"card-text white-text\">{{ bien.description }}</p>
            <div class=\"d-flex justify-content-around\">
                <p>{{ bien.categorie }}</p>
                <a href=\"{{ path('bien_show', {'id': bien.id}) }}\" class=\"btn btn-outline-white btn-md waves-effect\">Voir détails</a>
                <p>{{ bien.type }}</p>
            </div>
          </div>

        </div>
    <!--/.Card-->

    </div>
  <!-- Grid column -->

  <!-- Grid column -->
  {% endfor %}

</div>
<!-- Grid row -->
        
{% endblock %}
", "bien/index.html.twig", "D:\\exercices\\Wf3\\SYMFONY\\immo\\templates\\bien\\index.html.twig");
    }
}
