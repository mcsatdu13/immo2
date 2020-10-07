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

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_b14acd59f73fc3a1117748db10dc1c03de8d3661128a46554fa5039055f595cc extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Resetting:reset_content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div class=\"card mt-5\">
\t<!-- Card body -->
  \t\t<div class=\"card-body\">
\t\t\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_reset", ["token" => ($context["token"] ?? null)]), "attr" => ["class" => "fos_user_resetting_reset"]]);
        echo "
\t\t\t    <p class=\"h4 text-center py-4\">Modifier votre mot de passe</p>
\t\t\t    <div class=\"md-form\">
\t\t\t        <i class=\"fa fa-lock prefix blue-text\"></i>
\t\t\t        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 11), "first", [], "any", false, false, false, 11), 'widget');
        echo "
\t\t\t        <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Votre mot de passe</label>
\t\t\t        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 13), "first", [], "any", false, false, false, 13), 'help');
        echo "
\t\t\t        <small class=\"grey-text ml-5\">Votre mot de passe doit contenir au moins une majuscule et un chiffre et doit contenir 8 caractères minimum.</small>
\t\t\t      </div>
\t\t\t      <div class=\"md-form\">
\t\t\t        <i class=\"fa fa-lock prefix blue-text\"></i>
\t\t\t        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 18), "second", [], "any", false, false, false, 18), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  82 => 22,  75 => 18,  67 => 13,  62 => 11,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:Resetting:reset_content.html.twig", "D:\\exercices\\Wf3\\SYMFONY\\immo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
