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

/* @nava/parts/social.html.twig */
class __TwigTemplate_ddf0f6fd4bee0d3aa399dc1c53f1aeba extends Template
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
        yield "<ul class=\"social-icons\">
  ";
        // line 2
        if ((($context["facebook_url"] ?? null) != "")) {
            // line 3
            yield "    <li><a aria-label=\"facebook\" title=\"facebook\" href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"ficon-facebook\"></i></a></li>
  ";
        }
        // line 5
        yield "  ";
        if ((($context["twitter_url"] ?? null) != "")) {
            // line 6
            yield "    <li><a aria-label=\"twitter\" title=\"twitter\" href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"ficon-twitter\"></i></a></li>
  ";
        }
        // line 8
        yield "  ";
        if ((($context["instagram_url"] ?? null) != "")) {
            // line 9
            yield "    <li><a aria-label=\"instagram\" title=\"instagram\" href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["instagram_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"ficon-instagram\"></i></a></li>
  ";
        }
        // line 11
        yield "  ";
        if ((($context["linkedin_url"] ?? null) != "")) {
            // line 12
            yield "    <li><a aria-label=\"linkedin\" title=\"linkedin\" href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"ficon-linkedin\"></i></a></li>
  ";
        }
        // line 14
        yield "  ";
        if ((($context["youtube_url"] ?? null) != "")) {
            // line 15
            yield "    <li><a aria-label=\"youtube\" title=\"youtube\" href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["youtube_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"ficon-youtube\"></i></a></li>
  ";
        }
        // line 17
        yield "  ";
        if ((($context["vimeo_url"] ?? null) != "")) {
            // line 18
            yield "    <li><a aria-label=\"vimeo\" title=\"vimeo\" href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["vimeo_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"ficon-vimeo\"></i></a></li>
  ";
        }
        // line 20
        yield "  ";
        if ((($context["telegram_url"] ?? null) != "")) {
            // line 21
            yield "    <li><a aria-label=\"telegram\" title=\"telegram\" href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["telegram_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"ficon-telegram\"></i></a></li>
  ";
        }
        // line 23
        yield "  ";
        if ((($context["vk_url"] ?? null) != "")) {
            // line 24
            yield "    <li><a aria-label=\"vk\" title=\"vk\" href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["vk_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"ficon-vk\"></i></a></li>
  ";
        }
        // line 26
        yield "  ";
        if ((($context["whatsapp_url"] ?? null) != "")) {
            // line 27
            yield "    <li><a aria-label=\"whatsapp\" title=\"whatsapp\" href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["whatsapp_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"ficon-whatsapp\"></i></a></li>
  ";
        }
        // line 29
        yield "  ";
        if ((($context["github_url"] ?? null) != "")) {
            // line 30
            yield "    <li><a aria-label=\"github\" title=\"github\" href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["github_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"ficon-github\"></i></a></li>
  ";
        }
        // line 32
        yield "</ul>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["facebook_url", "twitter_url", "instagram_url", "linkedin_url", "youtube_url", "vimeo_url", "telegram_url", "vk_url", "whatsapp_url", "github_url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@nava/parts/social.html.twig";
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
        return array (  137 => 32,  131 => 30,  128 => 29,  122 => 27,  119 => 26,  113 => 24,  110 => 23,  104 => 21,  101 => 20,  95 => 18,  92 => 17,  86 => 15,  83 => 14,  77 => 12,  74 => 11,  68 => 9,  65 => 8,  59 => 6,  56 => 5,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@nava/parts/social.html.twig", "/var/www/html/Koha-2025/themes/contrib/nava/templates/parts/social.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2];
        static $filters = ["escape" => 3];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "escape"],
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
