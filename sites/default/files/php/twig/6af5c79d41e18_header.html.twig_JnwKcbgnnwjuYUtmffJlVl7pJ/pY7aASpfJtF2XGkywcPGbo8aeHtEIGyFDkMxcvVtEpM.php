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

/* @nava/parts/header/header.html.twig */
class __TwigTemplate_3e741f20578710a5ca96bdb04fe751f4 extends Template
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
        yield "<header class=\"header full-width\">
  ";
        // line 2
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    ";
            yield from $this->load("@nava/parts/header/header-top.html.twig", 3)->unwrap()->yield($context);
            // line 4
            yield "  ";
        }
        // line 5
        yield "  ";
        yield from $this->load("@nava/parts/header/header-main.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "  ";
        if (( !(($tmp = ($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_header", [], "any", false, false, true, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 7
            yield "    ";
            yield from $this->load("@nava/parts/header/header-page.html.twig", 7)->unwrap()->yield($context);
            // line 8
            yield "  ";
        }
        // line 9
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "    ";
            yield from $this->load("@nava/parts/header/hero.html.twig", 10)->unwrap()->yield($context);
            // line 11
            yield "  ";
        }
        // line 12
        yield "</header>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "is_front"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@nava/parts/header/header.html.twig";
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
        return array (  77 => 12,  74 => 11,  71 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@nava/parts/header/header.html.twig", "/var/www/html/Koha-2025/themes/contrib/nava/templates/parts/header/header.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2, "include" => 3];
        static $filters = [];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "include"],
                [],
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
