<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto

namespace GPBMetadata\Google\Analytics\Data\V1Beta;

class Data
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�2
\'google/analytics/data/v1beta/data.protogoogle.analytics.data.v1beta"?
	DateRange

start_date (	
end_date (	
name (	"�
MinuteRange
start_minutes_ago (H �
end_minutes_ago (H�
name (	B
_start_minutes_agoB
_end_minutes_ago"j
	Dimension
name (	O
dimension_expression (21.google.analytics.data.v1beta.DimensionExpression"�
DimensionExpressionV

lower_case (2@.google.analytics.data.v1beta.DimensionExpression.CaseExpressionH V

upper_case (2@.google.analytics.data.v1beta.DimensionExpression.CaseExpressionH ^
concatenate (2G.google.analytics.data.v1beta.DimensionExpression.ConcatenateExpressionH (
CaseExpression
dimension_name (	C
ConcatenateExpression
dimension_names (	
	delimiter (	B
one_expression"=
Metric
name (	

expression (	
	invisible ("�
FilterExpressionG
	and_group (22.google.analytics.data.v1beta.FilterExpressionListH F
or_group (22.google.analytics.data.v1beta.FilterExpressionListH H
not_expression (2..google.analytics.data.v1beta.FilterExpressionH 6
filter (2$.google.analytics.data.v1beta.FilterH B
expr"[
FilterExpressionListC
expressions (2..google.analytics.data.v1beta.FilterExpression"�
Filter

field_name (	J
string_filter (21.google.analytics.data.v1beta.Filter.StringFilterH K
in_list_filter (21.google.analytics.data.v1beta.Filter.InListFilterH L
numeric_filter (22.google.analytics.data.v1beta.Filter.NumericFilterH L
between_filter (22.google.analytics.data.v1beta.Filter.BetweenFilterH �
StringFilterO

match_type (2;.google.analytics.data.v1beta.Filter.StringFilter.MatchType
value (	
case_sensitive ("�
	MatchType
MATCH_TYPE_UNSPECIFIED 	
EXACT
BEGINS_WITH
	ENDS_WITH
CONTAINS
FULL_REGEXP
PARTIAL_REGEXP6
InListFilter
values (	
case_sensitive (�
NumericFilterO
	operation (2<.google.analytics.data.v1beta.Filter.NumericFilter.Operation9
value (2*.google.analytics.data.v1beta.NumericValue"�
	Operation
OPERATION_UNSPECIFIED 	
EQUAL
	LESS_THAN
LESS_THAN_OR_EQUAL
GREATER_THAN
GREATER_THAN_OR_EQUAL�
BetweenFilter>

from_value (2*.google.analytics.data.v1beta.NumericValue<
to_value (2*.google.analytics.data.v1beta.NumericValueB

one_filter"�
OrderByE
metric (23.google.analytics.data.v1beta.OrderBy.MetricOrderByH K
	dimension (26.google.analytics.data.v1beta.OrderBy.DimensionOrderByH C
pivot (22.google.analytics.data.v1beta.OrderBy.PivotOrderByH 
desc ($
MetricOrderBy
metric_name (	�
DimensionOrderBy
dimension_name (	T

order_type (2@.google.analytics.data.v1beta.OrderBy.DimensionOrderBy.OrderType"i
	OrderType
ORDER_TYPE_UNSPECIFIED 
ALPHANUMERIC!
CASE_INSENSITIVE_ALPHANUMERIC
NUMERIC�
PivotOrderBy
metric_name (	[
pivot_selections (2A.google.analytics.data.v1beta.OrderBy.PivotOrderBy.PivotSelectionA
PivotSelection
dimension_name (	
dimension_value (	B
one_order_by"�
Pivot
field_names (	8
	order_bys (2%.google.analytics.data.v1beta.OrderBy
offset (
limit (L
metric_aggregations (2/.google.analytics.data.v1beta.MetricAggregation"�

CohortSpec5
cohorts (2$.google.analytics.data.v1beta.CohortA
cohorts_range (2*.google.analytics.data.v1beta.CohortsRangeR
cohort_report_settings (22.google.analytics.data.v1beta.CohortReportSettings"f
Cohort
name (	
	dimension (	;

date_range (2\'.google.analytics.data.v1beta.DateRange"�
CohortsRangeK
granularity (26.google.analytics.data.v1beta.CohortsRange.Granularity
start_offset (

end_offset ("N
Granularity
GRANULARITY_UNSPECIFIED 	
DAILY

WEEKLY
MONTHLY"*
CohortReportSettings

accumulate ("4
ResponseMetaData 
data_loss_from_other_row ("
DimensionHeader
name (	"T
MetricHeader
name (	6
type (2(.google.analytics.data.v1beta.MetricType"u
PivotHeaderS
pivot_dimension_headers (22.google.analytics.data.v1beta.PivotDimensionHeader
	row_count ("^
PivotDimensionHeaderF
dimension_values (2,.google.analytics.data.v1beta.DimensionValue"�
RowF
dimension_values (2,.google.analytics.data.v1beta.DimensionValue@
metric_values (2).google.analytics.data.v1beta.MetricValue".
DimensionValue
value (	H B
	one_value"+
MetricValue
value (	H B
	one_value"J
NumericValue
int64_value (H 
double_value (H B
	one_value"�
PropertyQuotaA
tokens_per_day (2).google.analytics.data.v1beta.QuotaStatusB
tokens_per_hour (2).google.analytics.data.v1beta.QuotaStatusF
concurrent_requests (2).google.analytics.data.v1beta.QuotaStatusU
"server_errors_per_project_per_hour (2).google.analytics.data.v1beta.QuotaStatus\\
)potentially_thresholded_requests_per_hour (2).google.analytics.data.v1beta.QuotaStatus"2
QuotaStatus
consumed (
	remaining ("�
DimensionMetadata
api_name (	
ui_name (	
description (	
deprecated_api_names (	
custom_definition (
category (	"�
MetricMetadata
api_name (	
ui_name (	
description (	
deprecated_api_names (	6
type (2(.google.analytics.data.v1beta.MetricType

expression (	
custom_definition (
category
 (	"�
DimensionCompatibilityP
dimension_metadata (2/.google.analytics.data.v1beta.DimensionMetadataH �G
compatibility (2+.google.analytics.data.v1beta.CompatibilityH�B
_dimension_metadataB
_compatibility"�
MetricCompatibilityJ
metric_metadata (2,.google.analytics.data.v1beta.MetricMetadataH �G
compatibility (2+.google.analytics.data.v1beta.CompatibilityH�B
_metric_metadataB
_compatibility*g
MetricAggregation"
METRIC_AGGREGATION_UNSPECIFIED 	
TOTAL
MINIMUM
MAXIMUM	
COUNT*�

MetricType
METRIC_TYPE_UNSPECIFIED 
TYPE_INTEGER

TYPE_FLOAT
TYPE_SECONDS
TYPE_MILLISECONDS
TYPE_MINUTES

TYPE_HOURS
TYPE_STANDARD
TYPE_CURRENCY	
	TYPE_FEET


TYPE_MILES
TYPE_METERS
TYPE_KILOMETERS*P
Compatibility
COMPATIBILITY_UNSPECIFIED 

COMPATIBLE
INCOMPATIBLEBy
 com.google.analytics.data.v1betaBReportingApiProtoPZ@google.golang.org/genproto/googleapis/analytics/data/v1beta;databproto3'
        , true);

        static::$is_initialized = true;
    }
}

