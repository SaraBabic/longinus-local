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

/* themes/custom/longinus/templates/layout/status-messages.html.twig */
class __TwigTemplate_498cd7aa06807c73f04e08e2f44a1861932a64414b4f68d5ccb0b9b4cabc83e4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "<div data-drupal-messages>
    ";
        // line 23
        $this->displayBlock('messages', $context, $blocks);
        // line 56
        echo "</div>
";
    }

    // line 23
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 25
            echo "            ";
            // line 26
            $context["classes"] = [0 => "messages", 1 => ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 28
$context["type"], 28, $this->source))];
            // line 31
            echo "            <div role=\"contentinfo\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 31, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
                ";
            // line 32
            if (($context["type"] == "error")) {
                // line 33
                echo "                <div role=\"alert\">
                    ";
            }
            // line 35
            echo "                    ";
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) {
                // line 36
                echo "                        <h2 class=\"visually-hidden\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 36, $this->source), "html", null, true);
                echo "</h2>
                    ";
            }
            // line 38
            echo "                    ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 39
                echo "                        <ul class=\"messages__list\">
                            ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 41
                    echo "                                <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 41, $this->source), "html", null, true);
                    echo "</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                        </ul>
                    ";
            } else {
                // line 45
                echo "                        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 45, $this->source)), "html", null, true);
                echo "
                    ";
            }
            // line 47
            echo "                    <span class=\"messages__close-button\"></span>
                    ";
            // line 48
            if (($context["type"] == "error")) {
                // line 49
                echo "                </div>
                ";
            }
            // line 51
            echo "            </div>
            ";
            // line 53
            echo "            ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 53);
            // line 54
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/longinus/templates/layout/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 55,  130 => 54,  127 => 53,  124 => 51,  120 => 49,  118 => 48,  115 => 47,  109 => 45,  105 => 43,  96 => 41,  92 => 40,  89 => 39,  86 => 38,  80 => 36,  77 => 35,  73 => 33,  71 => 32,  64 => 31,  62 => 28,  61 => 26,  59 => 25,  54 => 24,  50 => 23,  45 => 56,  43 => 23,  40 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 */
#}
<div data-drupal-messages>
    {% block messages %}
        {% for type, messages in message_list %}
            {%
                set classes = [
                'messages',
                'messages--' ~ type,
            ]
            %}
            <div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\"{{ attributes.addClass(classes)|without('role', 'aria-label') }}>
                {% if type == 'error' %}
                <div role=\"alert\">
                    {% endif %}
                    {% if status_headings[type] %}
                        <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2>
                    {% endif %}
                    {% if messages|length > 1 %}
                        <ul class=\"messages__list\">
                            {% for message in messages %}
                                <li class=\"messages__item\">{{ message }}</li>
                            {% endfor %}
                        </ul>
                    {% else %}
                        {{ messages|first }}
                    {% endif %}
                    <span class=\"messages__close-button\"></span>
                    {% if type == 'error' %}
                </div>
                {% endif %}
            </div>
            {# Remove type specific classes. #}
            {% set attributes = attributes.removeClass(classes) %}
        {% endfor %}
    {% endblock messages %}
</div>
", "themes/custom/longinus/templates/layout/status-messages.html.twig", "/var/www/html/web/themes/custom/longinus/templates/layout/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 23, "for" => 24, "set" => 26, "if" => 32);
        static $filters = array("escape" => 31, "without" => 31, "length" => 38, "first" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
