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

/* @FOSUser/Resetting/reset_content.html.twig */
class __TwigTemplate_7e2b477384e9dc0b10818921b613d3f2da613ff5a5d15d42eca05262b9cf85b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset_content.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Resetting/reset_content.html.twig", 1);
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
        echo "\t<div class=\"card mt-5\">
\t<!-- Card body -->
  \t\t<div class=\"card-body\">
\t\t\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_reset", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 7, $this->source); })())]), "attr" => ["class" => "fos_user_resetting_reset"]]);
        echo "
\t\t\t    <p class=\"h4 text-center py-4\">Modifier votre mot de passe</p>
\t\t\t    <div class=\"md-form\">
\t\t\t        <i class=\"fa fa-lock prefix blue-text\"></i>
\t\t\t        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "plainPassword", [], "any", false, false, false, 11), "first", [], "any", false, false, false, 11), 'widget');
        echo "
\t\t\t        <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Votre mot de passe</label>
\t\t\t        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "plainPassword", [], "any", false, false, false, 13), "first", [], "any", false, false, false, 13), 'help');
        echo "
\t\t\t        <small class=\"grey-text ml-5\">Votre mot de passe doit contenir au moins une majuscule et un chiffre et doit contenir 8 caractères minimum.</small>
\t\t\t      </div>
\t\t\t      <div class=\"md-form\">
\t\t\t        <i class=\"fa fa-lock prefix blue-text\"></i>
\t\t\t        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "plainPassword", [], "any", false, false, false, 18), "second", [], "any", false, false, false, 18), 'widget');
        echo "
\t\t\t        <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Confirmez votre mot de passe</label>
\t\t\t      </div>
\t\t\t    <div class=\"text-center py-4 mt-3\">
\t\t\t        <button class=\"btn btn-primary text-center\" type=\"submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.reset.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\">Valider</button>
\t\t\t    </div>
\t\t\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  100 => 22,  93 => 18,  85 => 13,  80 => 11,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% trans_default_domain 'FOSUserBundle' %}
{% block body %}
\t<div class=\"card mt-5\">
\t<!-- Card body -->
  \t\t<div class=\"card-body\">
\t\t\t{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
\t\t\t    <p class=\"h4 text-center py-4\">Modifier votre mot de passe</p>
\t\t\t    <div class=\"md-form\">
\t\t\t        <i class=\"fa fa-lock prefix blue-text\"></i>
\t\t\t        {{ form_widget(form.plainPassword.first) }}
\t\t\t        <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Votre mot de passe</label>
\t\t\t        {{ form_help(form.plainPassword.first) }}
\t\t\t        <small class=\"grey-text ml-5\">Votre mot de passe doit contenir au moins une majuscule et un chiffre et doit contenir 8 caractères minimum.</small>
\t\t\t      </div>
\t\t\t      <div class=\"md-form\">
\t\t\t        <i class=\"fa fa-lock prefix blue-text\"></i>
\t\t\t        {{ form_widget(form.plainPassword.second) }}
\t\t\t        <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Confirmez votre mot de passe</label>
\t\t\t      </div>
\t\t\t    <div class=\"text-center py-4 mt-3\">
\t\t\t        <button class=\"btn btn-primary text-center\" type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\">Valider</button>
\t\t\t    </div>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>
{% endblock %}
", "@FOSUser/Resetting/reset_content.html.twig", "D:\\exercices\\Wf3\\SYMFONY\\immo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset_content.html.twig");
    }
}
