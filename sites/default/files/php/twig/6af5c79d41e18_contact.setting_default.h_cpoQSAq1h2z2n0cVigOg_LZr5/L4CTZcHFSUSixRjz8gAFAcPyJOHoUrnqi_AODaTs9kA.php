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

/* @help_topics/contact.setting_default.html.twig */
class __TwigTemplate_9aee3b665b1e421ba0c0ea35e0101d64 extends Template
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
        // line 6
        $context["contact_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Contact forms", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        $context["contact_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["contact_link_text"] ?? null), "entity.contact_form.collection"));
        // line 8
        $context["contact_page_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("the form displayed on the default contact page", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["contact_page_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["contact_page_link_text"] ?? null), "contact.site_page"));
        // line 10
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 11
        yield t("Set a site-wide contact form to be the default contact form (@contact_page_link; for example, <em>/contact</em>).", ["@contact_page_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["contact_page_link"] ?? null)), ]);
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@contact_link</em>.", ["@contact_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["contact_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 15
        yield t("Click <em>Edit</em> for the site-wide form you want to be the default.", []);
        yield "</li>
  <li>";
        // line 16
        yield t("Check <em>Make this the default form</em> and click <em>Save</em>.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/contact.setting_default.html.twig";
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
        return array (  81 => 16,  77 => 15,  73 => 14,  68 => 12,  64 => 11,  59 => 10,  57 => 9,  52 => 8,  50 => 7,  45 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/contact.setting_default.html.twig", "/var/www/html/Koha-2025/core/modules/contact/help_topics/contact.setting_default.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 6, "trans" => 6];
        static $filters = ["escape" => 11];
        static $functions = ["render_var" => 7, "help_route_link" => 7];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "trans"],
                [0 => "escape"],
                [0 => "render_var", 1 => "help_route_link"],
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
