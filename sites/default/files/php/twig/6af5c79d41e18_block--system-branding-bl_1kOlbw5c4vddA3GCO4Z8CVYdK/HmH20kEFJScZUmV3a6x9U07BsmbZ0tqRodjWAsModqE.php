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

/* themes/contrib/nava/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_253f3068d7525e3d5fd3d3565fecd463 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("block.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("block.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "site_name", "site_slogan"]);    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "<div class=\"site-brand\">
  ";
        // line 18
        if ((($tmp = ($context["site_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "\t\t<div class=\"site-logo\">
         <a href=\"";
            // line 20
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" title=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" rel=\"home\">
            <img src=\"";
            // line 21
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" fetchpriority=\"high\" />
         </a>
\t </div>
  ";
        }
        // line 25
        yield "   ";
        if (((($tmp = ($context["site_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["site_slogan"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 26
            yield "   <div class=\"site-name-slogan\">
      ";
            // line 27
            if ((($tmp = ($context["site_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "         <div class=\"site-name\">
            <a href=\"";
                // line 29
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                yield "\" rel=\"home\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
                yield "</a>
         </div>
      ";
            }
            // line 32
            yield "      ";
            if ((($tmp = ($context["site_slogan"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "         <div class=\"site-slogan\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true);
                yield "</div>
      ";
            }
            // line 35
            yield "   </div>
   ";
        }
        // line 37
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/nava/templates/block/block--system-branding-block.html.twig";
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
        return array (  119 => 37,  115 => 35,  109 => 33,  106 => 32,  96 => 29,  93 => 28,  91 => 27,  88 => 26,  85 => 25,  76 => 21,  70 => 20,  67 => 19,  65 => 18,  62 => 17,  55 => 16,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/nava/templates/block/block--system-branding-block.html.twig", "/var/www/html/Koha-2025/themes/contrib/nava/templates/block/block--system-branding-block.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "if" => 18];
        static $filters = ["t" => 20, "escape" => 21];
        static $functions = ["path" => 20];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "extends", 1 => "if"],
                [0 => "t", 1 => "escape"],
                [0 => "path"],
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
