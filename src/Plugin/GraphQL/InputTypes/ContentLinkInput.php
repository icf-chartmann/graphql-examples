<?php

namespace Drupal\graphql_examples\Plugin\GraphQL\InputTypes;

use Drupal\graphql\Plugin\GraphQL\InputTypes\InputTypePluginBase;

/**
 * The input type for block mutations.
 *
 * @GraphQLInputType(
 *   id = "content_link_input",
 *   name = "ContentLinkInput",
 *   fields = {
 *      "uri" = {
 *         "type" = "String",
 *         "nullable" = "TRUE"
 *      },
 *     "title" = "String"
 *   }
 * )
 */
class ContentLinkInput extends InputTypePluginBase {

}
