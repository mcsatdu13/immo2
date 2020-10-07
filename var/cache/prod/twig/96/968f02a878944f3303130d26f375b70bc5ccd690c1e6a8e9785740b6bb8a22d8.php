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

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_9ec75ac9ded100144d1f69af3b0dba41e3afef025efe3c305c8a8b2ccde68c06 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Registration/register_content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nouveau compte";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<!-- Card -->
<div class=\"card mt-5\">

  <!-- Card body -->
  <div class=\"card-body\">
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"], "class" => "border border-light p-5"]);
        echo "
<p class=\"h4 text-center py-4\">Créer un compte</p>

      <!-- Material input text -->
      <div class=\"md-form\">
        <i class=\"fa fa-user prefix blue-text\"></i>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 19), 'widget');
        echo "
        <label for=\"materialFormCardNameEx\" class=\"font-weight-light\">Nom d'utilisateur</label>
      </div>

      <!-- Material input email -->
      <div class=\"md-form\">
        <i class=\"fa fa-envelope prefix blue-text\"></i>
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 26), 'widget');
        echo "
        <label for=\"materialFormCardEmailEx\" class=\"font-weight-light\">Votre email</label>
      </div>

       <!-- Material input password -->
      <div class=\"md-form\">
        <i class=\"fa fa-lock prefix blue-text\"></i>
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 33), "first", [], "any", false, false, false, 33), 'widget');
        echo "
        <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Votre mot de passe</label>
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 35), 'help');
        echo "
        <small class=\"grey-text ml-5\">Votre mot de passe doit contenir au moins une majuscule et un chiffre et doit contenir 8 caractères minimum.</small>
      </div>
      <!-- Material input password -->
      <div class=\"md-form\">
        <i class=\"fa fa-lock prefix blue-text\"></i>
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 41), "second", [], "any", false, false, false, 41), 'widget');
        echo "
        <label for=\"materialFormCardPasswordEx\" class=\"font-weight-light\">Votre mot de passe</label>
      </div>
     

      <div class=\"text-center py-4 mt-3\">
            <button class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\"> Valider </button>
    </div>   
";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

  </div>
  <!-- Card body -->

</div>
<!-- Card -->
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 49,  117 => 47,  108 => 41,  99 => 35,  94 => 33,  84 => 26,  74 => 19,  65 => 13,  58 => 8,  54 => 7,  47 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Registration/register_content.html.twig", "D:\\exercices\\Wf3\\SYMFONY\\immo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
