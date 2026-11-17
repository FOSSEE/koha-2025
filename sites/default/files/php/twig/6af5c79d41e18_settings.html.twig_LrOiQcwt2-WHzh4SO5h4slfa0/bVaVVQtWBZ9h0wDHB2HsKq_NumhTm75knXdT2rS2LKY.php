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

/* @nava/parts/settings.html.twig */
class __TwigTemplate_0858c3e56de09dd1c8ddef2279588a49 extends Template
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
        if ((($tmp = ($context["bootstrapicons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("nava/bootstrap-icons"), "html", null, true);
            yield "
";
        }
        // line 4
        yield "<style>
.container {
  max-width: ";
        // line 6
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container_width"] ?? null), "html", null, true);
        yield "px;
}
";
        // line 8
        if ((($context["header_width"] ?? null) == "header_width_full")) {
            // line 9
            yield ".header .container {
  max-width: 100%;
}
";
        }
        // line 13
        if ((($context["main_width"] ?? null) == "main_width_full")) {
            // line 14
            yield ".highlighted .container,
.main-wrapper .container {
  max-width: 100%;
}
";
        }
        // line 19
        yield "
";
        // line 20
        if ((($context["footer_width"] ?? null) == "footer_width_full")) {
            // line 21
            yield ".footer .container {
  max-width: 100%;
}
";
        }
        // line 25
        if ((($tmp = ($context["highlight_author_comment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield ".by-node-author {
  box-shadow: var(--shadow-secondary);
}
";
        }
        // line 30
        yield "</style>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["bootstrapicons", "container_width", "header_width", "main_width", "footer_width", "highlight_author_comment"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@nava/parts/settings.html.twig";
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
        return array (  98 => 30,  92 => 26,  90 => 25,  84 => 21,  82 => 20,  79 => 19,  72 => 14,  70 => 13,  64 => 9,  62 => 8,  57 => 6,  53 => 4,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@nava/parts/settings.html.twig", "/var/www/html/Koha-2025/themes/contrib/nava/templates/parts/settings.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 2];
        static $functions = ["attach_library" => 2];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "escape"],
                [0 => "attach_library"],
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
