<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @nava/parts/footer/footer-last.html.twig */
class __TwigTemplate_43d3297745187db98fc510e3250edba6 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"footer-last full-width\">
  <div class=\"container\">
    <div class=\"footer-last-container full-width\">
      ";
        // line 4
        if ((($tmp = ($context["copyright_text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "        <div class=\"copyright\">
          &copy; ";
            // line 6
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
            yield " ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
            yield ", All rights reserved.
        </div>
      ";
        }
        // line 9
        yield "      ";
        if ((($tmp = ($context["social_icons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "          <div class=\"footer-social\">
            ";
            // line 11
            yield from $this->load("@nava/parts/social.html.twig", 11)->unwrap()->yield($context);
            // line 12
            yield "          </div>
      ";
        }
        // line 14
        yield "    </div>
  </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["copyright_text", "site_name", "social_icons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@nava/parts/footer/footer-last.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  75 => 14,  71 => 12,  69 => 11,  66 => 10,  63 => 9,  55 => 6,  52 => 5,  50 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@nava/parts/footer/footer-last.html.twig", "/var/www/html/Koha-2025/themes/contrib/nava/templates/parts/footer/footer-last.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 4, "include" => 11];
        static $filters = ["escape" => 6, "date" => 6];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "include"],
                [0 => "escape", 1 => "date"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
