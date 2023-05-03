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

/* modules/contrib/commerce_paypal/templates/commerce-paypal-checkout-custom-card-fields.html.twig */
class __TwigTemplate_542fd88e175eb11aded52ed522d4c97a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"commerce-paypal-checkout-custom-card-fields\">
  <div class=\"paypal-messages\"></div>
  <div class=\"commerce-paypal-card-fields-wrapper\">
    <label for=\"commerce-paypal-card-number\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Card Number"));
        echo "</label>
    <div id=\"commerce-paypal-card-number\" class=\"commerce-paypal-checkout-custom-card-field\"></div>
    <label for=\"commerce-paypal-expiration-date\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Expiration Date"));
        echo "</label>
    <div id=\"commerce-paypal-expiration-date\" class=\"commerce-paypal-checkout-custom-card-field\"></div>
    <label for=\"commerce-paypal-cvv\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("CVV"));
        echo "</label>
    <div id=\"commerce-paypal-cvv\" class=\"commerce-paypal-checkout-custom-card-field\"></div>
    <div id=\"payments-sdk__contingency-lightbox\"></div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce_paypal/templates/commerce-paypal-checkout-custom-card-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  49 => 6,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce_paypal/templates/commerce-paypal-checkout-custom-card-fields.html.twig", "D:\\XAMPP\\htdocs\\mystore\\web\\modules\\contrib\\commerce_paypal\\templates\\commerce-paypal-checkout-custom-card-fields.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("t" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
