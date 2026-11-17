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

/* @help_topics/contact.adding_fields.html.twig */
class __TwigTemplate_131e91d1e178b07df2de6aec2d8e7712 extends Template
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
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 9
        yield t("Add, remove, or rearrange the fields on personal and site-wide contact forms.", []);
        yield "</p>
<h2>";
        // line 10
        yield t("What are the fields on contact forms?", []);
        yield "</h2>
<p>";
        // line 11
        yield t("Both personal and site-wide contact forms will always have <em>Subject</em> and <em>Message</em> fields. You can add additional fields for users to fill out if desired. Note that if you want to display other content on a form page, such as text or images, you can use a content block.", []);
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
        yield t("Click <em>Manage fields</em> for the form you want to change the fields of, and add or remove one or more fields on the form.", []);
        yield "</li>
  <li>";
        // line 16
        yield t("Click <em>Manage form display</em> to change the order or configuration of the fields on the form.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/contact.adding_fields.html.twig";
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
        return array (  82 => 16,  78 => 15,  74 => 14,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  52 => 8,  50 => 7,  45 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/contact.adding_fields.html.twig", "/var/www/html/Koha-2025/core/modules/contact/help_topics/contact.adding_fields.html.twig");
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
        static $filters = ["escape" => 14];
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
