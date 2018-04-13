<?php

/**
 * Invokes a remote enabled function module on the backend and returns it's export parameters.
 *
 * @param string     $name    The remote function name to invoke
 * @param array|null $imports import parameters
 * @param bool|null  $rtrim   right-trim string fields, if null the global .ini setting will be used
 *
 * @return array export/changing/table parameters for this function
 *
 * @throws InvalidArgumentException if $connection is not a valid SAP Connection resource
 * @throws SapException             RFC raised exception or other error occured
 */
function sap_invoke_function(string $name, $connection, array $imports = null, bool $rtrim = null): array {}